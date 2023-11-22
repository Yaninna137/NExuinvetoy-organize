document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.getElementById('empleados-table').createTBody();
    const form = document.getElementById('empleado-form');

    // Recuperar datos de localStorage al cargar la página
    const storedData = JSON.parse(localStorage.getItem('empleados')) || [];
    storedData.forEach(function (data) {
        addRowToTable(data);
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        console.log('Formulario enviado');
        // Obtener los valores del formulario
        const trabajador = document.querySelector('#trabajador').value;
        const rut = document.querySelector('#rut').value;
        const email = document.querySelector('#email').value;
        const telefono = document.querySelector('#telefono').value;
        const fechaIngreso = document.querySelector('#fecha_ingreso').value;
        const estado = document.querySelector('#estado').value;

        // Agregar el empleado a la tabla y almacenar en localStorage
        const newRowData = {
            trabajador: trabajador,
            rut: rut,
            email: email,
            telefono: telefono,
            fechaIngreso: fechaIngreso,
            estado: estado
        };

        addRowToTable(newRowData);

        // Limpiar el formulario
        form.reset();

        // Guardar los datos en localStorage
        const allData = JSON.parse(localStorage.getItem('empleados')) || [];
        allData.push(newRowData);
        localStorage.setItem('empleados', JSON.stringify(allData));
    });

    function addRowToTable(data) {
        const newRow = tableBody.insertRow();
        const cells = [null, data.trabajador, data.rut, data.email, data.telefono, data.fechaIngreso, data.estado];
        cells.forEach(function (cellData) {
            const cell = newRow.insertCell();
            cell.textContent = cellData;
        });

        // Agregar botón de eliminar a la nueva fila
        const deleteButtonCell = newRow.insertCell();
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Eliminar';
        deleteButton.addEventListener('click', function () {
            // Obtener el ID del empleado a eliminar
            const idEmpleado = newRow.cells[0].textContent;

            // Eliminar la fila de la tabla
            tableBody.removeChild(newRow);

            // Eliminar el empleado de localStorage
            const allData = JSON.parse(localStorage.getItem('empleados')) || [];
            const updatedData = allData.filter(function (item) {
                return item.trabajador !== data.trabajador; // Utiliza un criterio único para identificar el empleado
            });
            localStorage.setItem('empleados', JSON.stringify(updatedData));
        });

        deleteButtonCell.appendChild(deleteButton);
    }
});
