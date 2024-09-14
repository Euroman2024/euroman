// Obtener el ancho de pantalla
var anchoPantalla = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

// Verificar si el ancho de pantalla es menor o igual a 767 píxeles
if (anchoPantalla <= 767) {
    document.addEventListener('DOMContentLoaded', function () {
        // Espera a que el DOM esté completamente cargado


        //DIV 1
        function mostrarOcultarDiv1() {
            var divopc = document.getElementById('divA');
            var div4 = document.getElementById('div4');
            var div2 = document.getElementById('div2');
            if (div2.style.display === 'none' || div2.style.display === '') {
                div2.style.display = 'flex';
                div4.style.display = 'none';
                div6.style.display = 'none';
                div8.style.display = 'none';
                divopc.style.height = '2000px';
            } else {
                div2.style.display = 'none';
                divopc.style.height = '1000px';
            }
        }

        var div1 = document.getElementById('div1');
        if (div1) {
            div1.addEventListener('click', mostrarOcultarDiv1);
        }



        //DIV2
        function mostrarOcultarDiv2() {
            var divopc = document.getElementById('divA');
            var div4 = document.getElementById('div4');
            var div2 = document.getElementById('div2');
            if (div4.style.display === 'none' || div4.style.display === '') {
                div4.style.display = 'flex';
                div2.style.display = 'none';
                div8.style.display = 'none';
                div6.style.display = 'none';
                divopc.style.height = '2000px';
            } else {
                div4.style.display = 'none';
                divopc.style.height = '1000px';
            }
        }

        var div3 = document.getElementById('div3');
        if (div3) {
            div3.addEventListener('click', mostrarOcultarDiv2);
        }

        //DIV 4
        function mostrarOcultarDiv3() {
            var divopc = document.getElementById('divA');
            var div6 = document.getElementById('div6');
            var div2 = document.getElementById('div2');
            if (div6.style.display === 'none' || div6.style.display === '') {
                div6.style.display = 'flex';
                div2.style.display = 'none';
                div4.style.display = 'none';
                div8.style.display = 'none';
                divopc.style.height = '2000px';
            } else {
                div6.style.display = 'none';
                divopc.style.height = '1000px';
            }
        }

        var div5 = document.getElementById('div5');
        if (div5) {
            div5.addEventListener('click', mostrarOcultarDiv3);
        }


        //DIV3
        function mostrarOcultarDiv4() {
            var divopc = document.getElementById('divA');
            var div8 = document.getElementById('div8');
            var div2 = document.getElementById('div2');
            var div4 = document.getElementById('div4');
            var div6 = document.getElementById('div6');
            if (div8.style.display === 'none' || div8.style.display === '') {
                div8.style.display = 'flex';
                div2.style.display = 'none';
                div4.style.display = 'none';
                div6.style.display = 'none';
                divopc.style.height = '2000px';
            } else {
                div8.style.display = 'none';
                divopc.style.height = '1000px';
            }
        }

        var div7 = document.getElementById('div7');
        if (div7) {
            div7.addEventListener('click', mostrarOcultarDiv4);
        }

    });
} else {
    document.addEventListener('DOMContentLoaded', function () {
        // Espera a que el DOM esté completamente cargado


        //DIV 1
        function mostrarOcultarDiv1() {
            var divopc = document.getElementById('divA');
            var div4 = document.getElementById('div4');
            var div2 = document.getElementById('div2');
            if (div2.style.display === 'none' || div2.style.display === '') {
                div2.style.display = 'flex';
                div4.style.display = 'none';
                div6.style.display = 'none';
                div8.style.display = 'none';
                divopc.style.height = '950px';
            } else {
                div2.style.display = 'none';
                divopc.style.height = '500px';
            }
        }

        var div1 = document.getElementById('div1');
        if (div1) {
            div1.addEventListener('click', mostrarOcultarDiv1);
        }



        //DIV2
        function mostrarOcultarDiv2() {
            var divopc = document.getElementById('divA');
            var div4 = document.getElementById('div4');
            var div2 = document.getElementById('div2');
            if (div4.style.display === 'none' || div4.style.display === '') {
                div4.style.display = 'flex';
                div2.style.display = 'none';
                div8.style.display = 'none';
                div6.style.display = 'none';
                divopc.style.height = '950px';
            } else {
                div4.style.display = 'none';
                divopc.style.height = '500px';
            }
        }

        var div3 = document.getElementById('div3');
        if (div3) {
            div3.addEventListener('click', mostrarOcultarDiv2);
        }

        //DIV 4
        function mostrarOcultarDiv3() {
            var divopc = document.getElementById('divA');
            var div6 = document.getElementById('div6');
            var div2 = document.getElementById('div2');
            if (div6.style.display === 'none' || div6.style.display === '') {
                div6.style.display = 'flex';
                div2.style.display = 'none';
                div4.style.display = 'none';
                div8.style.display = 'none';
                divopc.style.height = '950px';
            } else {
                div6.style.display = 'none';
                divopc.style.height = '500px';
            }
        }

        var div5 = document.getElementById('div5');
        if (div5) {
            div5.addEventListener('click', mostrarOcultarDiv3);
        }


        //DIV3
        function mostrarOcultarDiv4() {
            var divopc = document.getElementById('divA');
            var div8 = document.getElementById('div8');
            var div2 = document.getElementById('div2');
            var div4 = document.getElementById('div4');
            var div6 = document.getElementById('div6');
            if (div8.style.display === 'none' || div8.style.display === '') {
                div8.style.display = 'flex';
                div2.style.display = 'none';
                div4.style.display = 'none';
                div6.style.display = 'none';
                divopc.style.height = '950px';
            } else {
                div8.style.display = 'none';
                divopc.style.height = '500px';
            }
        }

        var div7 = document.getElementById('div7');
        if (div7) {
            div7.addEventListener('click', mostrarOcultarDiv4);
        }

    });
}