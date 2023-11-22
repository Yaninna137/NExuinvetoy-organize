<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/inicio-sesion.css')}}">
</head>
<body>
    <div class="container">
        <div class="login">
            <img src="images/IconNexus.png" id="toggleButton" alt="Toggle Sidebar">
        </div>
        <div class="sidebar" id="sidebar">
            <p style="font-size: 50px;">BIENVENIDO!</p>
            <button style="font-size: 20px;" id="infoButton">Haz clic aqui para obtener más información</button>
            <div id="infoContent" class="info-content">
                <!-- Aquí coloca la información que deseas mostrar -->
                <p>Esta es la página de inicio de sesión de NexusInventory, aquí puedes acceder como empleado o administrador para gestionar tu inventario y recursos.</p>
                <p>Somos un grupo de estudiantes comprometidos en la creación de una plataforma innovadora destinada a brindar a las empresas las herramientas necesarias para optimizar y organizar sus operaciones,
                   nuestra misión es simplificar la gestión de negocios y mejorar la eficiencia empresarial.

                    Nuestro enfoque no se limita solo a la organización interna de las empresas, sino que también se extiende a la colaboración y la conexión con otros negocios,
                    creemos en la importancia de la sinergia empresarial, y nuestra plataforma facilitará la colaboración entre empresas para lograr objetivos compartidos. <br> <br>

                    Además de las herramientas de organización y colaboración, también estamos comprometidos en ofrecer contenido educativo y recursos que ayuden a las empresas a crecer y prosperar.
                    Queremos ser un socio confiable para el éxito empresarial, brindando información valiosa y oportunidades de aprendizaje.

                    En un mundo empresarial cada vez más competitivo, sabemos lo crucial que es tener una visión clara y una organización efectiva.
                    nuestra plataforma ofrecerá soluciones integrales que permitirán a las empresas, sin importar su tamaño o industria, tomar el control de sus operaciones y tomar decisiones informadas.
                </p><br>
                <p style="font-size: 40px;">¡Contáctanos!</p>
                <p>MESA CENTRAL: 9999 9999 9999 9999 <br>
                   TELEFONO DE CONTACTO: 27637 72637 42424 <br>
                </p>
            </div>
        </div>
    </div>
    <section>
        <form action="/login" method="POST">

         @csrf
            <h1>Iniciar Sesion</h1>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>

                    <input type="text" name="username" required>
                    <label for="">Tu Nombre De Usuario</label>

                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>


                    <input type="password" name="password" required>
                    <label for="">Contraseña</label>

                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Recuerdame</label>
                </div>
            <button  type="submit">Ingresar</button>
            <div class="register">
                <p>No tienes una cuenta?<a href="{{ url('register') }}">Registrate</a></p>
            </div>
        </form>
    </section>
      <script src="js/inicio-sesion.js"></script>
</body>
</html>
