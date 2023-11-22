<!-- resources/views/empleados/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleados</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/Estructura.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/trabajadores.css') }}">
</head>
<body id="body">
    <nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
        <header id="Encabezado"><h1>Registro de Empleados</h1></header>
        <div class="TABLA__DATOS">
            <table id="empleados-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Trabajador</th>
                        <th>RUT</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Fecha de Ingreso</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <form id="empleado-form" action="{{ url('/trabajadores') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="trabajador">Trabajador:</label>
                <input type="text" id="trabajador" name="Nombre_Empleado_o_Administrador" placeholder="Ingrese el nombre del trabajador" required>
            </div>
            <div class="form-group">
                <label for="rut">RUT:</label>
                <input type="text" id="rut" name="rut" placeholder="Ingrese el RUT" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="Correo" placeholder="Ingrese el email" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="Telefono" placeholder="Ingrese el teléfono" required>
            </div>
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" id="fecha_ingreso" name="Fecha_De_Ingreso" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" placeholder="Ingrese el estado" required>
            </div>
            <button type="submit" id="agregar-btn">Agregar Empleado</button>
        </form>
    </div>
    <script src="{{ asset('js/menu_administrador.js') }}"></script>
    <script src="{{ asset('js/trabajadores.js') }}"></script>
</body>
</html>
