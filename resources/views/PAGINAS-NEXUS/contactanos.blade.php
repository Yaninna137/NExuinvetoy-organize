<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet" href="{{asset('css/contactanos.css')}}">
<head>
    <title>Formulario de Contacto</title>
</head>
<body id="body">
    <nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
        <div class="container">
                <h1>Contáctanos</h1>
                <form action="{{ route('contacto.store') }}" method="POST">
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
                    @csrf
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>

                    <label for="correo">Cual es tu pregunta?:</label>
                    <input type="text" name="correo" id="correo" required>

                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" required></textarea>

                    <input type="submit" value="Enviar">
                </form>
            </div>
       </div>
       <script src="js/menu_administrador.js"></script>
</body>
</html>
