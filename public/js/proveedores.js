// public/js/proveedores.js

document.getElementById('agregar-btn').addEventListener('click', function () {
    // Obtener los datos del formulario
    const formData = new FormData(document.getElementById('proveedor-form'));

    // Enviar los datos al servidor mediante AJAX
    fetch(document.getElementById('proveedor-form').action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
    })

    .then(response => response.json())
    .then(data => {
        // Manejar la respuesta del servidor, por ejemplo, actualizar la tabla en la interfaz
        console.log(data);
    })
    .catch(error => console.error('Error:', error));
});


document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.getElementById('table-body');
    const form = document.getElementById('proveedor-form');

    // Obtener los datos almacenados en el almacenamiento local al cargar la página
    const storedData = JSON.parse(localStorage.getItem('proveedores')) || [];

    // Función para actualizar la tabla con los datos almacenados
    function updateTable() {
        tableBody.innerHTML = ''; // Limpiar la tabla antes de actualizar

        storedData.forEach(function (rowData) {
            const newRow = tableBody.insertRow();
            rowData.forEach(function (cellData) {
                const cell = newRow.insertCell();
                cell.textContent = cellData;
            });

            // Agregar botón de eliminar a la fila
            const deleteButtonCell = newRow.insertCell();
            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Eliminar';
            deleteButton.addEventListener('click', function () {
                // Eliminar la fila y actualizar los datos almacenados
                tableBody.removeChild(newRow);
                const index = storedData.indexOf(rowData);
                storedData.splice(index, 1);
                localStorage.setItem('proveedores', JSON.stringify(storedData));
            });
            deleteButtonCell.appendChild(deleteButton);
        });
    }

    // Actualizar la tabla al cargar la página
    updateTable();

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe y recargue la página

        // Obtener los valores del formulario
        const proveedor = document.querySelector('#proveedor').value;
        const correo = document.querySelector('#correo').value;
        const telefono = document.querySelector('#telefono').value;
        const direccion = document.querySelector('#direccion').value;

        // Agregar los datos a la tabla y al almacenamiento local
        const newRowData = [proveedor, correo, telefono, direccion];
        storedData.push(newRowData);
        localStorage.setItem('proveedores', JSON.stringify(storedData));

        // Actualizar la tabla con los nuevos datos
        updateTable();

        // Limpiar el formulario
        form.reset();
    });
});

