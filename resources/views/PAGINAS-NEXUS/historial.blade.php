<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Registro</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet" href="{{asset('css/Formularios.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pagina.css')}}">
    <link rel="stylesheet" href="{{asset('css/historial.css')}}">
</head>
<body id="body">
    <nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
        <header id="Encabezado"><h1>Panel de Actividad</h1></header>


        <div class="TABLA__DATOS">
        <table class="table table-data2">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Tipo de Evento</th>
            <th>Descripción</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr class="tr-shadow">
            <td>1 de julio 2004</td>
            <td><span>Eliminacion</span></td>
            <td><span>5 trabajadores</span></td>
            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                <div class="BOTONES_SELECCION">
                    <button id="EliminarDato" title="Delete">Eliminar</button>
                    <button id="More" title="More">Más información</button>
                </div>
            </td>
        </tr>
        <tr class="spacer"></tr>
        <tr class="tr-shadow">
            <td>3 de agosto 2006</td>
            <td><span>Modificación</span></td>
            <td><span>2 trabajadores</span></td>
            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                <div class="BOTONES_SELECCION">
                    <button id="EliminarDato" title="Delete">Eliminar</button>
                    <button id="More" title="More">Más información</button>
                </div>
            </td>
        </tr>
        <tr class="spacer"></tr>
        <tr class="tr-shadow">
            <td>10 de septiembre 2008</td>
            <td><span>Añadir</span></td>
            <td><span>3 trabajadores</span></td>
            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                <div class="BOTONES_SELECCION">
                    <button id="EliminarDato" title="Delete">Eliminar</button>
                    <button id="More" title="More">Más información</button>
                </div>
            </td>
        </tr>
        <tr class="spacer"></tr>
        <tr class="tr-shadow">
            <td>5 de mayo 2010</td>
            <td><span>Eliminacion</span></td>
            <td><span>1 trabajador</span></td>
            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                <div class="BOTONES_SELECCION">
                    <button id="EliminarDato" title="Delete">Eliminar</button>
                    <button id="More" title="More">Más información</button>
                </div>
            </td>
        </tr>
    </tbody>
</table>

        </div>
    </div>

    <script src="js/menu_administrador.js"></script>
    <!-- <script src="../JavaScript/menu_empleado.js"></script> -->
</body>
</html>
