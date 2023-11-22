<!-- resources/views/productos/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Productos</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/Estructura.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/productos.css') }}">
</head>
<body id="body">
    <nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
        <header id="Encabezado"><h1>Registro de Productos</h1></header>

        <div class="TABLA__DATOS">
            <table id="productos-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Código</th>
                        <th>Cantidad Total</th>
                        <th>Categoría</th>
                        <th>Fecha de Registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>

        <form id="producto-form" action="{{ url('/productos') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="producto">Producto:</label>
                <input type="text" id="producto"  name="Nombre_producto"  placeholder="Ingrese el nombre del producto" required>
            </div>

            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" id="codigo"  name="Codigo_Barra"  placeholder="Ingrese el código" required>
            </div>

            <div class="form-group">
                <label for="cantidad_total">Cantidad Total:</label>
                <input type="number" id="cantidad_total"  name="Numero_de_Unidades"  placeholder="Ingrese la cantidad total" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" id="categoria" name="categoria" placeholder="Ingrese la categoría" required>
            </div>

            <div class="form-group">
                <label for="fecha_registro">Fecha de Registro:</label>
                <input type="date" id="fecha_registro" name="fecha_registro" required>
            </div>

            <button type="submit" id="agregar-btn">Agregar Producto</button>

        </form>
    </div>

    <script src="{{ asset('js/menu_administrador.js') }}"></script>
    <script src="{{ asset('js/productos.js') }}"></script>

</body>
</html>
