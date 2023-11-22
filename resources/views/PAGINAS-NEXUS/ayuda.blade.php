<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página de Ayuda </title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet" href="{{asset('css/ayuda.css')}}">
</head>
<body>
    <nav class="Menu"></nav>
    <div class="Cuerpo_Pagina">
        <div id="container">
        <h1>Página de Ayuda de NexusInventory</h1>
            <p>Bienvenido a nuestra página de ayuda interactiva. Haz clic en los botones de ayuda para obtener información adicional.</p>

            <button class="help-button" onclick="toggleHelp('help1')">Ayuda 1</button>
            <div class="help-content" id="help1">
                <p>No sabes quienes Somos?: <br> Ve al Apartado de Mas Sobre Nosotros y Conocenos .</p>
            </div>

            <button class="help-button" onclick="toggleHelp('help2')">Ayuda 2</button>
            <div class="help-content" id="help2">
                <p>Para eliminar un producto, siga estos pasos: <br>

                    Acceda al panel de administración de NexusInventory. <br>
                    Haga clic en el menú "Productos". <br>
                    Busque el producto que desea eliminar. <br>
                    Haga clic en el icono de la papelera para eliminar el producto.</p>
            </div>
            <button class="help-button" onclick="toggleHelp('help3')">Ayuda 3</button>
            <div class="help-content" id="help3">
                <p>Para crear un nuevo producto, siga estos pasos:<br>1. Acceda al panel de administración de NexusInventory.<br>2. Haga clic en el menú \"Productos\".<br>3. Haga clic en el botón \"Crear nuevo producto\".<br>4. Complete los campos del formulario de creación de producto.<br>5. Haga clic en el botón \"Guardar\".<br>.</p>
            </div>
            <button class="help-button" onclick="toggleHelp('help4')">Ayuda 4</button>
            <div class="help-content" id="help4">
                <p>Para crear una nueva categoría, siga estos pasos:<br>1. Acceda al panel de administración de NexusInventory.<br>2. Haga clic en el menú \"Categorías\".<br>3. Haga clic en el botón \"Crear nueva categoría\".<br>4. Ingrese el nombre de la categoría.<br>5. Haga clic en el botón \"Guardar\".<br>.</p>
            </div>
            <button class="help-button" onclick="toggleHelp('help5')">Ayuda 5</button>
            <div class="help-content" id="help5">
                <p>Para eliminar un producto, siga estos pasos:<br>1. Acceda al panel de administración de NexusInventory.<br>2. Haga clic en el menú \"Productos\".<br>3. Busque el producto que desea eliminar.<br>4. Haga clic en el icono de la papelera para eliminar el producto.</p>
            </div>
            <button class="help-button" onclick="toggleHelp('help6')">Ayuda 6</button>
            <div class="help-content" id="help6">
                <p>
                    Haga clic en el menú "Categorías". <br>
                    Busque la categoría que desea eliminar. <br>
                    Haga clic en el boton para eliminar la categoría.</p>
            </div>
            <button class="help-button" onclick="toggleHelp('help7')">Ayuda 7</button>
            <div class="help-content" id="help7">
                <p>el calendario puede mostrar la fecha actual y mostrar hasta 5 años extras</p>
            </div>
            <button class="help-button" onclick="toggleHelp('help8')">Ayuda 8</button>
            <div class="help-content" id="help8">
                <p>para agregar proveedores solo tienes que completar el formulario de proovedores y darle agregar.</p>
            </div>
            <button class="help-button" onclick="toggleHelp('help9')">Ayuda 9</button>
            <div class="help-content" id="help9">
                <p>si no ingresas con tu usuario y contraseña correcta no podras entrar a trabajar en la pagina web.</p>
            </div>
            <button class="help-button" onclick="toggleHelp('help10')">Ayuda 10</button>
            <div class="help-content" id="help10">
                <p>Si necesitas mas ayuda no dudes en ir al apartado de Contáctanos y Podrás realizar todas tus consultas.</p>
            </div>
        </div>

    <script src="js/menu_administrador.js"></script>
    <!-- <script src="../JavaScript/menu_empleado.js"></script> -->
    <script src="js/ayuda.js"></script>
</body>
</html>
