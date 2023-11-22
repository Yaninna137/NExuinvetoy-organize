<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
<div class="container">
        <div class="login">
           <a href="{{route('login.show')}}" ><img src="images/IconNexus.png" id="toggleButton" alt="Toggle Sidebar"></a>
        </div>
    </div>

        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif


        @if (session('success'))
          <div class="alert alert-success text-center" style="color: white; font-size: 1rem">
             {{ session('success') }}
          </div>
        @endif

        <section>
        <form action="{{ route('servidors.store') }}" method="POST">
        @csrf
            <h1>Registro de Servidor</h1>
            <div class="inputbox">
                <input type="text" id="nombre_servidor" name="nombre_servidor" required>
                <label for="nombre_servidor">Nombre del Servidor:</label>
            </div>

            <div class="inputbox">
                <input type="password" id="contrasena_servidor" name="contrasena_servidor" required>
                <label for="contrasena_servidor">Contraseña del Servidor: </label>
            </div>

            <div class="inputbox">
                <input type="text" id="plataforma" name="plataforma" required>
                <label for="plataforma">Plataforma:</label>
            </div>

            <button type="submit">Registrar Servidor</button>
        </form>
    </section>


    <section>
        <form action="/register" method="POST">
        @csrf
            <h1>Registro de Administrador</h1>
            <div class="inputbox">
                <input type="text" id="nombre_usuario" name="username" required>
                <label for="nombre_usuario">Nombre de Usuario:</label>
            </div>

            <div class="inputbox">
                <input type="text" id="tipo" name="type" required>
                <label for="tipo">Tipo:</label>
            </div>

            <div class="inputbox">
                <input type="text" id="rut_usuario" name="rut" required>
                <label for="rut_usuario">RUT del Usuario:</label>
            </div>

            <div class="inputbox">
                <input type="password" id="contrasena_usuario" name="password" required>
                <label for="contrasena_usuario">Contraseña del Usuario:</label>
            </div>

            <div class="inputbox">
                <input type="email" id="email" name="email" required>
                <label for="email">Email:</label>
            </div>

            <div class="inputbox">
                <input type="text" id="celular" name="phone" required>
                <label for="celular">Número de Celular:</label>
            </div>

            <button type="submit">Registrar Administrador</button>
        </form>
    </section>
</body>
    <footer>
        <p>Haz clic en el icono de NexusInventory para volver al inicio</p>
    </footer>
</html>
