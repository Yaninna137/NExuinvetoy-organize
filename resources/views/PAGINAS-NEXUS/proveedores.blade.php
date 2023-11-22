<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/Estructura.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Proveedores</title>
    <link rel="stylesheet" href="{{asset('css/proveedor.css')}}">

</head>
<body id="body">
<nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">

    <div class="container">
        <h2>Tabla de Proveedores</h2>
        <form id="proveedor-form" action="{{ url('/proveedores') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="proveedor">Proveedor:</label>
                <input type="text" id="proveedor" placeholder="Ingrese el nombre del proveedor" name="proveedor" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" placeholder="Ingrese el correo electrónico" name="correo" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Ingrese el número de teléfono" name="telefono" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" placeholder="Ingrese la dirección" name="direccion" required>
            </div>

            <button type="submit" id="agregar-btn">Agregar Proveedor</button>
        </form>

        <table id="proveedores-table">
            <thead>
                <tr>
                    <th>Proveedor</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <!-- Filas de proveedores se agregarán aquí -->
            </tbody>
        </table>
    </div>


    </div>


    <script src="js/menu_administrador.js"></script>
    <script src="js/proveedores.js"></script>


</body>
</html>






