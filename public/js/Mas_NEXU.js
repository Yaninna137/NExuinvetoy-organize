var contenidoNQ = document.querySelector('.Que_es')
fetch('../JSON/Nexuinventory.json')
    .then(res=> res.json())
    .then(datos => {
        datos.forEach(dato =>{
            contenidoNQ.innerHTML +=`
            <p id="p">${dato.Texto}</p>
            `
        })
    })
var contenidoNH = document.querySelector('.historia')
fetch('../JSON/Historia.json')
    .then(res=> res.json())
    .then(datos => {
        datos.forEach(dato =>{
            contenidoNH.innerHTML +=`
            <p id="p" >${dato.Texto}</p>
            `
        })
    })

var contenidoNC = document.querySelector('#encargados')

fetch('../JSON/Equipo.json')
    .then( res => res.json())
    .then( datos => {
        datos.forEach(dato => {
            contenidoNC.innerHTML += `
            <div class="Contendor">
                <img src="${dato.Photo}" alt="Img de un Contribuidor" id='imgAutores'>
                <div class="INFORMACION">
                <p id="Nombre">${dato.Nombre}</p>
                <p id="puesto">${dato.Cargo}</p>
                <p id="infor">${dato.Tipo_Contribucion}</p>
                <div>
            </div>
            `
        });
})

