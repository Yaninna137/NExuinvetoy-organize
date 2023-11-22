<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajustes</title>
    <link rel="stylesheet" type="text/css"  href="{{asset('css/ajustes.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/Estructura.css')}}">
</head>
<body>
	<nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
	<section class="settings">
        <div id="container">
			<div class="user">
				<h1>Nombre del servidor / User: Juancito #523</h1>
				<img id="ImagenUser" src = "https://cdn-icons-png.flaticon.com/128/149/149071.png" alt="Imagen del usuario" >
				<img id="ImagenUser" src = "https://cdn-icons-png.flaticon.com/128/149/149071.png" alt="Imagen del usuario" > <br>
				<button>Cambiar</button><button>Cambiar</button>
			</div> <hr class="hr">
			<div class="info">
				<p>Nombre del servidor: SERVER NEXUS</p>
				<p>Nombre del usuario: ALEXIS MONSALVE</p>
				<p>Rut: 210946569</p>
				<p>Correo Electronico: alex@gmail.com</p>
				<p>Telefono: 18371833</p>
				<p>Contraseña: **********</p>
				<div class="info2">
					<button>Editar</button>
				</div>
			</div> <hr class="hr">
			<div class="account">
				<div class="sesion">
			   <a  href="{{ url('login') }}">Cerrar cuenta</a>
				</div> <br>
				<p>Primero debes eliminar todas las aplicaciones de esta cuenta</p>
				<p><strong>ADVERTENCIA</strong>: Cerrrar su cuenta es permanente</p>
			</div>
		</div>
	</section>
    <script src="{{ asset('js/menu_administrador.js') }}"></script>
</body>
</html>
