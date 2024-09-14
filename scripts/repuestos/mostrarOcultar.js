var recomendados = document.getElementById('recomendados')

var soportemotor = document.getElementById('soportemotor')
var lubricacionmotor = document.getElementById('lubricacionmotor')
var sistemarefrigeracion = document.getElementById('sistemarefrigeracion')
var admisionmotor = document.getElementById('admisionmotor')

var mostrardivsoporte = document.getElementById('mostrardivsoporte')
var mostrardivlubricacion = document.getElementById('mostrardivlubricacion')


function mostrarDivsoporte() {
    if (mostrardivsoporte.style.display == 'none' || mostrardivsoporte.style.display == '') {
        mostrardivsoporte.style.display = 'flex';
        recomendados.style.display = 'none';
        mostrardivlubricacion.style.display = 'none';
    } else {
        mostrardivsoporte.style.display = 'none';
        recomendados.style.display = 'flex';
    }
}
function mostrarDivlubricacion() {
    if (mostrardivlubricacion.style.display == 'none' || mostrardivlubricacion.style.display == '') {
        mostrardivlubricacion.style.display = 'flex';
        recomendados.style.display = 'none';
        mostrardivsoporte.style.display = 'none';
    } else {
        mostrardivlubricacion.style.display = 'none';
        recomendados.style.display = 'flex';
    }
}
soportemotor.addEventListener('click', mostrarDivsoporte);
lubricacionmotor.addEventListener('click', mostrarDivlubricacion);