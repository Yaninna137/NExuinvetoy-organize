// Datos en memoria para la tabla de categorías
let categorias = [];

// Obtener los datos de LocalStorage al cargar la página
if (localStorage.getItem('categorias')) {
    categorias = JSON.parse(localStorage.getItem('categorias'));
}

function actualizarTabla() {
    const tabla = document.getElementById("categoria-table");
    tabla.innerHTML = `
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Categoría</th>
                <th>Producto Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ${categorias.map(categoria => `
                <tr id="fila-${categoria.id}">
                    <td>${categoria.id}</td>
                    <td>${categoria.tipo}</td>
                    <td><input type="number" value="${categoria.total}" id="cantidad-${categoria.id}"></td>
                    <td>
                        <button onclick="eliminarCategoria(${categoria.id})">Eliminar</button>
                        <button onclick="actualizarCantidad(${categoria.id})">Actualizar</button>
                    </td>
                </tr>
            `).join("")}
            <tr>
                <td>${categorias.length + 1}</td>
                <td>Nueva Categoría</td>
                <td><input type="number" value="0" id="cantidad-nueva"></td>
                <td>
                    <button onclick="agregarNuevaCategoria()">Agregar</button>
                </td>
            </tr>
        </tbody>
    `;

    // Guardar los datos en LocalStorage después de actualizar la tabla
    localStorage.setItem('categorias', JSON.stringify(categorias));
}

function actualizarCantidad(id) {
    const cantidadInput = document.getElementById(`cantidad-${id}`);
    const nuevaCantidad = parseInt(cantidadInput.value, 10);

    if (!isNaN(nuevaCantidad)) {
        const categoria = categorias.find(cat => cat.id === id);
        if (categoria) {
            categoria.total = nuevaCantidad;
            actualizarTabla();

            // Enviar los datos actualizados al servidor
            enviarDatosAlServidor({ id: categoria.id, total: nuevaCantidad });
        }
    } else {
        alert("Por favor, ingresa un número válido para la cantidad.");
    }
}


//FUNCIONALIDAD SOLO REFLEJADA EN LA PAGINA, NO EN LA BASE DE DATOS
function eliminarCategoria(id) {
    const categoriaIndex = categorias.findIndex(cat => cat.id === id);
    if (categoriaIndex !== -1) {
        categorias.splice(categoriaIndex, 1);
        actualizarTabla();
    }
}

function agregarNuevaCategoria() {
    const nuevoNombre = prompt("Ingresa el nombre de la nueva categoría:");

    // Verifica si el usuario ingresó un nombre
    if (nuevoNombre) {
        const nuevoId = categorias.length + 1;
        categorias.push({ id: nuevoId, tipo: nuevoNombre, total: 0 });

        // Actualizar la tabla en la interfaz
        actualizarTabla();

        // Enviar los datos al servidor
        enviarDatosAlServidor({ id: nuevoId, tipo: nuevoNombre, total: 0 });

        // Envía una solicitud POST al servidor para agregar la nueva categoría
        fetch('/categorias', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ Tipo_de_Categoria: nuevoNombre, Producto_Total_unidad: 0 }),
        })
        .then(response => {
            if (response.ok) {
                console.log("Nueva categoría agregada correctamente en el servidor.");

                // Recarga la página para reflejar los cambios (puedes ajustar esto según tus necesidades)
                location.reload();
            } else {
                console.error("Error en la solicitud al servidor.");
            }
        })
        .catch(error => {
            console.error("Error en la solicitud al servidor:", error);
        });
    }
}

function enviarDatosAlServidor(datos) {
    // Envía una solicitud POST al servidor
    fetch(`/categorias/${datos.id}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ Producto_Total_unidad: datos.total }),
    })
    .then(response => {
        if (response.ok) {
            console.log("Datos insertados/actualizados correctamente en el servidor.");
        } else {
            console.error("Error en la solicitud al servidor.");
        }
    })
    .catch(error => {
        console.error("Error en la solicitud al servidor:", error);
    });
}

// Inicializa la tabla al cargar la página
actualizarTabla();
