(function () {
    let barra = document.getElementById("navBarId");
    let bloques = document.getElementsByClassName("bloque");
    let fechaEnPantalla = document.createElement("a");
    fechaEnPantalla.classList.add("fuenteComun");
    fechaEnPantalla.setAttribute("style", "text-align:left");

    /*obteniendo fecha actual*/
    var diaHoy = new Date().getDate();
    var mesHoy = new Date().getMonth();
    var annioHoy = new Date().getFullYear();

    var dias = [
      "Domingo",
      "Lunes",
      "Martes",
      "Miércoles",
      "Jueves",
      "Viernes",
      "Sábado"
    ];
    var meses = [
      "Enero",
      "Febrero",
      "Marzo",
      "Abril",
      "Mayo",
      "Junio",
      "Julio",
      "Agosto",
      "Septiembre",
      "Octubre",
      "Noviembre",
      "Diciembre"
    ];

    var diaActual = dias[new Date().getDay()];
    var mesActual = meses[new Date().getMonth()];

    let fechatxt = document.createTextNode("Hoy es: "+
      diaActual +
        " " +
        new Date().getDate() +
        " de " +
        mesActual +
        ""
    );
    fechaEnPantalla.appendChild(fechatxt);
    barra.appendChild(fechaEnPantalla);

    //*Llenado calendario con dias*//

    let annioSelec =new Date().getFullYear();
    let mesSelec = new Date().getMonth();


    /*resaltar el día de hoy*/
    var resaltarHoy = function(i,mesSelec,annioSelec){

      var primerDia= new Date(annioSelec, mesSelec).getDay();
       if(i-(primerDia-1)===diaHoy && mesSelec===mesHoy && annioSelec===annioHoy){

          bloques[i].classList.add("resaltar");
        }else{
       bloques[i].classList.remove("resaltar");


        };

    }



    /*funcion para llenar calendario*/

    var llenarCalendario = function (annioSelec, mesSelec) {

      var primerDiaMes = new Date(annioSelec, mesSelec).getDay();
      var diasMes = new Date(annioSelec, mesSelec+1, 0).getDate();
      y = 1;

      for (var i = primerDiaMes; i <diasMes+primerDiaMes; i++) {
        var num = document.createElement("a");
        num.classList.add("numeroDia");
        var numero = document.createTextNode(y);
        num.appendChild(numero);

        bloques[i].appendChild(num);

        resaltarHoy(i,mesSelec,annioSelec);

        y++;

      }

    };

      /*cambiar titulo del calendario conforme se cambia*/
    var cambiarTituloFecha = function(annioSelec,mesSelec){

       var calSeleccionado = "Calendario " + meses[mesSelec] + " " + annioSelec;
    var Titulo_Calendario = document.getElementById("Titulo_Calendario");
    Titulo_Calendario.innerText = calSeleccionado;
    };
    function removeAllChildNodes(parent) {
      while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
      }
    }

    var cambiarAnnioCalendario=function(mesSelec){
      if(mesSelec<=1){
        annioSelec--;
      }else if(mesSelec>=11){
        annioSelec++;

      };

    };

    var anteriorC = function () {
      /*limpio todos los nodos */
      for (var i = 0; i < bloques.length; i++) {
        removeAllChildNodes(bloques[i]);
      }

      /*agrego los nuevos numeros correspondientes
       al mes*/
      if (mesSelec <= 0) {
        mesSelec = 11;
       annioSelec--;
        cambiarTituloFecha(annioSelec,mesSelec);
        llenarCalendario(annioSelec, mesSelec);


      } else {
        mesSelec--;

      cambiarTituloFecha(annioSelec,mesSelec);
         llenarCalendario(annioSelec, mesSelec);

      }


    };

    var siguienteC = function () {
      /*limpio todos los nodos */
      for (var i = 0; i < bloques.length; i++) {
        removeAllChildNodes(bloques[i]);
      }

      /*agrego los nuevos numeros correspondientes
       al mes*/
      if (mesSelec >= 11) {
        mesSelec = 0;
       annioSelec++;
        cambiarTituloFecha(annioSelec,mesSelec);
        llenarCalendario(annioSelec, mesSelec);

      } else {
        mesSelec++;

      cambiarTituloFecha(annioSelec,mesSelec);
         llenarCalendario(annioSelec, mesSelec);
      }


    };

  /*botones para navegar en el calendario*/
    var bt_ant = document.getElementById("b_ant");

    bt_ant.addEventListener("click", anteriorC);



    var bt_der = document.getElementById("b_der");
    bt_der.addEventListener("click", siguienteC);

    /*llenar calendario al entrar en el programa*/
     cambiarTituloFecha(annioSelec,mesSelec);
     llenarCalendario(annioSelec, mesSelec);



  })();
