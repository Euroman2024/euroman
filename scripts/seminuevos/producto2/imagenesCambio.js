var imagenes = [
    "../carpetaeuromanimagenes/seminuevos/producto2/tgs8.jpg",
    "../carpetaeuromanimagenes/seminuevos/producto2/tgs4.jpg",
    "../carpetaeuromanimagenes/seminuevos/producto2/tgs3.jpg",
    "../carpetaeuromanimagenes/seminuevos/producto2/tgs1.jpg"            
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