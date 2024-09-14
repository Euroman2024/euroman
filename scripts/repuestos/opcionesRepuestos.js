var opciones1 = document.getElementById('opciones1')
        var opciones2 = document.getElementById('opciones2')
        var opciones3 = document.getElementById('opciones3')
        var opciones4 = document.getElementById('opciones4')


        function mostrarDiv1() {
            if (opciones1.style.display == 'none' || opciones1.style.display == '') {
                opciones1.style.display = 'flex';
                opciones2.style.display = 'none';
                opciones3.style.display = 'none';
                opciones4.style.display = 'none';
            } else {
                opciones1.style.display = 'none';
            }
        }
        function mostrarDiv2() {
            if (opciones2.style.display == 'none' || opciones2.style.display == '') {
                opciones2.style.display = 'flex';
                opciones1.style.display = 'none';
                opciones3.style.display = 'none';
                opciones4.style.display = 'none';
            } else {
                opciones2.style.display = 'none';
            }
        }
        function mostrarDiv3() {
            if (opciones3.style.display == 'none' || opciones3.style.display == '') {
                opciones3.style.display = 'flex';
                opciones2.style.display = 'none';
                opciones1.style.display = 'none';
                opciones4.style.display = 'none';
            } else {
                opciones3.style.display = 'none';
            }
        }
        function mostrarDiv4() {
            if (opciones4.style.display == 'none' || opciones4.style.display == '') {
                opciones4.style.display = 'flex';
                opciones3.style.display = 'none';
                opciones2.style.display = 'none';
                opciones1.style.display = 'none';
            } else {
                opciones4.style.display = 'none';
            }
        }