<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- resources/views/layouts/app.blade.php o tu diseño principal -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <link rel="stylesheet" type="text/css"  href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet"  href="{{asset('css/TABLA2.css')}}">
</head>
<body id="body">
    <nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
        <header id="Encabezado"><h1>Panel de Categorias</h1></header>


        <div class="TABLA__DATOS">

        <table id="categoria-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Categoría</th>
                <th>Producto Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->Tipo_de_Categoria }}</td>
                    <td><span id="cantidad-{{ $categoria->id }}">{{ $categoria->Producto_Total_unidad }}</span></td>
                    <td>
                        <button onclick="eliminarCategoria({{ $categoria->id }})">Eliminar</button>
                        <button onclick="actualizarCantidad({{ $categoria->id }})">Actualizar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    </div>


    <script src="js/menu_administrador.js"></script>
    <script src="js/categoria.js"></script>

</body>
</html>
