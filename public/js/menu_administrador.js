function mas_item(){
    const Productos_list = document.querySelector('#Productos');
    const Provedores_list = document.querySelector('#Provedores');
    const Trabajadores_list = document.querySelector('#Trabajadores');


    Productos_list.innerHTML = `<a href="#">Productos  </a>`;
    Provedores_list.innerHTML = `<a href="#">Proveedores</a>`;
    Trabajadores_list.innerHTML = `<a href="#">Trabajadores</a>`;

    var bloque_1, bloque,bloque2 = true;

    Productos_list.addEventListener('click', function() {Lista_Productos(this);});
    Provedores_list.addEventListener('click', function() { Lista_Provedores(this);});
    Trabajadores_list.addEventListener('click', function() { Lista_Trabajadores(this);});

    function Lista_Trabajadores(objeto){
        if(bloque2){
            bloque2 = false;
            objeto.innerHTML= `
            <a href="trabajadores"><span id="Trab">Trabajadores</span></a>
            `;
            const t = document.querySelector('#Trab');
            t.style.color = '#FFEBA7';
        }
        else {
            bloque2 = true;
            objeto.innerHTML = `<a href="#">Trabajadores</a> `;
        };
    }

    function Lista_Productos(objeto){
        if(bloque_1){
            bloque_1 = false;
            objeto.innerHTML= `
            <a href="productos"><span id='P1'>Productos</span></a>

            `;
            const p = document.querySelector('#P1');
            p.style.color = '#FFEBA7';
        }
        else {
            bloque_1 = true;
            objeto.innerHTML = `<a href="#">Productos</a> `;
        };
    }

    function Lista_Provedores(objeto){
        if(bloque){
            bloque = false;
            objeto.innerHTML= `
            <a href="proveedores"><span id="P2">Proveedores</span></a>
            `;
            const p = document.querySelector('#P2');
            p.style.color = '#FFEBA7';
        }
        else {
            bloque = true;
            objeto.innerHTML = `<a href="#">Proveedores </a>`;
        };
    }
}

const menu = document.querySelector('.Menu')
menu.innerHTML = `
<button id="Boton__Menu"onclick="cambiarTamano()"></button>
<div id="menu__Parte Uno">
<img id="ImagenUsuario" src = "https://cdn-icons-png.flaticon.com/128/149/149071.png" alt="Imagen del usuario" >
<div id="bloque_informativo">
    <ul>
        <li>User:      <span id="NombreUsuaario">Joaquin Cantero Olivera</span></li>

        <li>Localhost: <span id="NombreEmpresa">Cansue</span></li>

        <li>Formato    <span id="TipoEntrada">  Admin/Colaborador</span></li>

        <li>Codigo:    <span id="CodigoRutaBd"> #00001</span></li>
    </ul>
</div>
</div>
<hr>
<div id="menu__Parte-Dos">
<ul class="Seleccion-Uno">
    <li> <a href="home">Home</a> </li>

    <li> <a href="calendario">Calendario  </a> </li>

    <li> <a href="categorias">Categorias  </a> </li>

    <li id="Provedores"></li>

    <li id="Productos"></li>

    <li> <a href="contactanos">Mensajes Empleados </a> </li>

    <li id="Trabajadores"></li>

    <li> <a href="historial">Historial </a> </li>

</ul>
<hr>
<ul class="Seleccion-Dos">
    <li id="ajuste">       <a href="ajustes">Ajustes </a> </li>

    <li id="ifo">          <a href="mas-sobre-nexus">Mas sobre nosotros</a> </li>

    <li id="ayuda">        <a href="ayuda">Ayuda</a></li>

    <li id="condicion">    <a href="terminos">Termino y reglamentos</a></li>
</ul>
</div>
`
var bloqueGrande = true;

function cambiarTamano() {
  var body = document.getElementById("body");
  const menu = document.querySelector('.Menu')

  if (bloqueGrande) {
    body.style.gridTemplateColumns = "1% auto";
    bloqueGrande = false;
    menu.innerHTML = `
        <button id="Boton__Menu"onclick="cambiarTamano()"></button>
    `
  } else {
    body.style.gridTemplateColumns = "18rem auto";
    bloqueGrande = true;
    menu.innerHTML += `
    <div id="menu__Parte Uno">
    <img id="ImagenUsuario" src = "https://cdn-icons-png.flaticon.com/128/149/149071.png" alt="Imagen del usuario" >
    <div id="bloque_informativo">
        <ul>
            <li>User:      <span id="NombreUsuaario">Joaquin Cantero Olivera</span></li>
            <li>Localhost: <span id="NombreEmpresa">Cansue</span></li>
            <li>Formato    <span id="TipoEntrada">  Admin/Colaborador</span></li>
            <li>Codigo:    <span id="CodigoRutaBd"> #00001</span></li>
        </ul>
    </div>
    </div>
    <hr>
    <div id="menu__Parte-Dos">


    <ul class="Seleccion-Uno">
        <li> <a href="home">Home</a> </li>

        <li> <a href="calendario">Calendario  </a> </li>

        <li> <a href="categorias">Categorias  </a> </li>

        <li id="Provedores"></li>

        <li id="Productos"></li>

        <li> <a href="contactanos">Mensajes Empleados</a> </li>

        <li id="Trabajadores"></li>

        <li><a href="historial">Historial</a> </li>
    </ul>


    <hr>

    <ul class="Seleccion-Dos">

        <li id="ajuste">      <a href="ajustes">Ajustes</a> </li>

        <li id="ifo">         <a href="mas-sobre-nexus">Mas sobre nosotros</a> </li>

        <li id="ayuda">       <a href="ayuda">Ayuda</a></li>

        <li id="condicion">   <a href="terminos">Termino y reglamentos</a></li>

    </ul>
    </div>
    `
    mas_item()
  }

}
mas_item()
