document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.getElementById('productos-table').createTBody();
    const form = document.getElementById('producto-form');

    // Cargar los datos del almacenamiento local del navegador al cargar la página
    const savedData = localStorage.getItem('productos');
    if (savedData) {
        const data = JSON.parse(savedData);
        const newRow = tableBody.insertRow();
        const cells = [data.id, data.nombreProducto, data.codigoBarra, data.cantidadTotal, data.categoria, data.fechaRegistro];
        cells.forEach(function (cellData) {
            const cell = newRow.insertCell();
            cell.textContent = cellData;
        });
        // Agregar botón de eliminar a la nueva fila
        const deleteButtonCell = newRow.insertCell();
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Eliminar';
        deleteButton.addEventListener('click', function () {
            tableBody.removeChild(newRow);
        });
        deleteButtonCell.appendChild(deleteButton);
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        console.log('Formulario enviado');
        // Obtener los valores del formulario
        const nombreProducto = document.querySelector('#producto').value;
        const codigoBarra = document.querySelector('#codigo').value;
        const cantidadTotal = document.querySelector('#cantidad_total').value;
        const categoria = document.querySelector('#categoria').value;
        const fechaRegistro = document.querySelector('#fecha_registro').value;
        // Enviar la petición AJAX al servidor para guardar el producto
        $.ajax({
            type: 'POST',
            url: '/productos', // Ajusta la URL según tu configuración
            data: {
                Nombre_producto: nombreProducto,
                Codigo_Barra: codigoBarra,
                Numero_de_Unidades: cantidadTotal,
                categoria: categoria,
                fecha_registro: fechaRegistro,
                _token: $('input[name="_token"]').val(), // Utilizar el valor del campo _token
            },
            success: function (response) {
                // Si la petición es exitosa, agregar la fila a la tabla
                const newRow = tableBody.insertRow();
                const cells = [response.id, nombreProducto, codigoBarra, cantidadTotal, categoria, fechaRegistro];
                cells.forEach(function (cellData) {
                    const cell = newRow.insertCell();
                    cell.textContent = cellData;
                });
                // Agregar botón de eliminar a la nueva fila
                const deleteButtonCell = newRow.insertCell();
                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Eliminar';
                deleteButton.addEventListener('click', function () {
                    tableBody.removeChild(newRow);
                });
                deleteButtonCell.appendChild(deleteButton);
                // Limpiar el formulario
                form.reset();
                // Guardar los datos en el almacenamiento local del navegador
                const data = {
                    id: response.id,
                    nombreProducto: nombreProducto,
                    codigoBarra: codigoBarra,
                    cantidadTotal: cantidadTotal,
                    categoria: categoria,
                    fechaRegistro: fechaRegistro
                };
                localStorage.setItem('productos', JSON.stringify(data));
            },
            error: function (error) {
                console.error('Error al enviar la petición AJAX:', error);
            }
        });
    });
});



