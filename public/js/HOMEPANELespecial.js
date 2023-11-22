const Ptrabajadores = document.querySelector('.Area__Especial')
Ptrabajadores.innerHTML = `
<section>
<h4>Panel de actividad</h4>
<table id="TablaCabeza">
    <thead >
        <tr>
            <th id="T">Trabajadores</th>
            <th></th>
            <th id="Cargo">Cargo</th>
            <th id="estado">Estado</th>
        </tr>
    </thead>
</table>
<div class="DATOSTrabajador">
    <table id="DatosTrab">
            <tr>
                <th id="IMG"> <img src="busqueda.png" alt="IMG User"></td>
                <th id="Nombre">Alonso Adamaco</th>
                <th id="Bod">Bodegero 1</th>
                <th id="Estado">En línia</th>
            </tr>
            <tr>
                <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
                <th id="Nombre">Esequiel Benavides</th>
                <th id="Bod">Bodegero 1</th>
                <th id="Estado">En línia</th>
            </tr>
            <tr>
                <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
                <th id="Nombre">Kevin Parra</th>
                <th id="Bod">Bodegero 1</th>
                <th id="Estado">Desconectado</th>
            </tr>
    </table>
</div>
</section>
<button id="botonT">Mas</button>
`
const botonT = document.querySelector('#botonT');
var bloque = true;
botonT.addEventListener('click', function () {otra_tabla(this)});

function otra_tabla(objeto){
    const tablas = document.querySelector('.DATOSTrabajador');
    if(bloque){
        bloque = false;
        objeto.innerHTML=`Menos`;
        // Remplazar esto por un for , que leria la base de datos
        tablas.innerHTML = `  
        <table id="DatosTrab">
            <tr>
            <th id="IMG"> <img src="busqueda.png" alt="IMG User"></td>
            <th id="Nombre">Alonso Adamaco</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">En línia</th>
        </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Esequiel Benavides</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">En línia</th>
        </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Kevin Parra</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">Desconectado</th>
        </tr>
        <tr>
            <th id="IMG"> <img src="busqueda.png" alt="IMG User"></td>
            <th id="Nombre">Ramiro Curín</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">Desconectado</th>
            </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Juan Péres</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">Desconectado</th>
            </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Carla Molina</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">Desconectado</th>
            </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Aidren Colón</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">Desconectado</th>
            </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Esteban Zapata</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">Desconectado</th>
            </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Edgar Ortíz</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">Desconectado</th>
            </tr>
        </table> `;
    }else{
        bloque=true;
        objeto.innerHTML=`Mas`;
        tablas.innerHTML =`
        <table id="DatosTrab">
        <tr>
            <th id="IMG"> <img src="busqueda.png" alt="IMG User"></td>
            <th id="Nombre">Alonso Adamaco</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">En línia</th>
        </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Esequiel Benavides</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">En línia</th>
        </tr>
        <tr>
            <th id="IMG"><img src="busqueda.png" alt="IMG User"></th>
            <th id="Nombre">Kevin Parra</th>
            <th id="Bod">Bodegero 1</th>
            <th id="Estado">Desconectado</th>
        </tr>
</table>`;
    }
};


/* */