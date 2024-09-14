var imagenes = [
    "../carpetaeuromanimagenes/camion11.jpg",
    "../carpetaeuromanimagenes/camion111.jpg",
    "../carpetaeuromanimagenes/camion1111.jpg",
    "../carpetaeuromanimagenes/camion11111.jpg"            
    // Agrega más imágenes según sea necesario
];

var indiceImagen = 0;
var intervalo;

function cambiarImagen(nuevaImagen) {
    document.getElementById("imagenPrincipal").src = nuevaImagen;
    clearInterval(intervalo);
    iniciarIntervalo();
}

function cambiarImagenAutomaticamente() {
    indiceImagen = (indiceImagen + 1) % imagenes.length;
    document.getElementById("imagenPrincipal").src = imagenes[indiceImagen];
}

function iniciarIntervalo() {
    intervalo = setInterval(cambiarImagenAutomaticamente, 2000);
}

// Iniciar el intervalo al cargar la página
iniciarIntervalo();

// Crear miniaturas
var miniaturasHTML = "";
imagenes.forEach(function (imagen, index) {
    miniaturasHTML += '<img class="imagenMiniatura yet-another-animated-div" src="' + imagen + '" alt="Miniatura ' + (index + 1) + '" onclick="cambiarImagen(\'' + imagen + '\')"> ';
});

document.getElementById("miniaturas").innerHTML = miniaturasHTML;