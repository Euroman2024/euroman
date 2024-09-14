/*let subcategoriasSeleccionadas = {};
let categoriasExpandidas = {};*/
let todosRepuestos = []; // Variable global para almacenar todos los repuestos
const repuestosPorPagina = 1;


// Función para cargar los repuestos al hacer clic en una subcategoría
function cargarRepuestos(subcategoriaId, nombreSubcategoria, pagina = 1) {
    // Almacenar la subcategoría seleccionada
    const categoriaId = subcategoriasSeleccionadas[subcategoriaId];
    subcategoriasSeleccionadas[categoriaId] = subcategoriaId;

    // Mostrar el nombre de la subcategoría seleccionada en el contenido
    const detallesRepuesto = document.getElementById('detalles-repuesto');
    detallesRepuesto.innerHTML = `<div class="h2clase"><h2>${nombreSubcategoria}</h2><br><h2></h2></div>`;

    // Ocultar todos los repuestos
    document.querySelectorAll('.repuesto').forEach(repuesto => {
        repuesto.style.display = 'none';
    });

    // Filtrar los repuestos por la subcategoría seleccionada
    const repuestosFiltrados = todosRepuestos.filter(repuesto => repuesto.subcategoria_id === subcategoriaId);

    // Calcular los índices de los repuestos a mostrar en la página actual
    const inicio = (pagina - 1) * repuestosPorPagina;
    const fin = inicio + repuestosPorPagina;
    const repuestosPagina = repuestosFiltrados.slice(inicio, fin);

    // Mostrar los repuestos filtrados en la página actual
    repuestosPagina.forEach(repuesto => {
        const divRepuesto = document.createElement('div');
        divRepuesto.classList.add('repuesto');
        let imagenesHTML = '';
        for (let i = 1; i <= 1; i++) {
            if (repuesto['imagen' + i]) {
                imagenesHTML += `<img src="${repuesto['imagen' + i].replace('.', '')}" alt="">`;
            }
        }
        divRepuesto.innerHTML = `
        <div class="divr"><h3>${repuesto.nombre_repuesto}</h3></div><div class="imglr"><img src="./carpetaeuromanimagenes/logo2.png" alt=""></div></div><div class="imglW"><a class="what" href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ${repuesto.nombre_repuesto} y quiero obtener más información sobre el producto."></a><img src="https://i.pinimg.com/originals/91/13/34/911334dc490932fed5b7cd8f76c023d5.png" alt="x"></div>
        <div class="repuestosDiva">${imagenesHTML}</div>
        `;
        detallesRepuesto.appendChild(divRepuesto);
    });

    // Crear los botones de navegación
    crearBotonesPaginacion(repuestosFiltrados.length, pagina, (pagina) => cargarRepuestos(subcategoriaId, nombreSubcategoria, pagina));
}

// Función para crear los botones de navegación
function crearBotonesPaginacion(totalRepuestos, paginaActual, callback) {
    const paginacion = document.getElementById('paginacion');
    paginacion.innerHTML = ''; // Limpiar botones anteriores
    const totalPaginas = Math.ceil(totalRepuestos / repuestosPorPagina);

    const botonAnterior = document.createElement('a');
    botonAnterior.textContent = '<';
    botonAnterior.classList.add('ante');
    botonAnterior.addEventListener('click', () => {
        if (paginaActual > 1) {
            callback(paginaActual - 1);
        }
    });

    const botonSiguiente = document.createElement('a');
    botonSiguiente.textContent = '>';
    botonSiguiente.classList.add('sigu');
    botonSiguiente.addEventListener('click', () => {
        if (paginaActual < totalPaginas) {
            callback(paginaActual + 1);
        }
    });

    paginacion.appendChild(botonAnterior);
    paginacion.appendChild(botonSiguiente);
}

// Cargar las categorías al cargar la página
window.onload = () => {
    //cargarCategorias();
    // Cargar todos los repuestos inicialmente
    cargarTodosRepuestos();
};

// Función para cargar todos los repuestos
function cargarTodosRepuestos(pagina = 1) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', './repuestos/obtener_todos_repuestos.php', true);
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            // Procesar la respuesta y almacenar los repuestos en la variable global
            todosRepuestos = JSON.parse(xhr.responseText);

            // Mostrar todos los repuestos inicialmente con paginación
            cargarRepuestosPagina(todosRepuestos, pagina);
        } else {
            console.error('Error al cargar repuestos');
        }
    };
    xhr.onerror = function() {
        console.error('Error de conexión');
    };
    xhr.send();
}

// Función para cargar repuestos en una página específica
function cargarRepuestosPagina(repuestos, pagina) {
    const detallesRepuesto = document.getElementById('detalles-repuesto');
    detallesRepuesto.innerHTML = `<div class="h2clase"><h2></h2><br><h2></h2></div>`;
    
    const inicio = (pagina - 1) * repuestosPorPagina;
    const fin = inicio + repuestosPorPagina;
    const repuestosPagina = repuestos.slice(inicio, fin);

    document.querySelectorAll('.repuesto').forEach(repuesto => {
        repuesto.classList.add('slide-out');
    });

    setTimeout(() => {
        document.querySelectorAll('.repuesto').forEach(repuesto => {
            repuesto.remove();
        });

        repuestosPagina.forEach(repuesto => {
            const divRepuesto = document.createElement('div');
            divRepuesto.classList.add('repuesto', 'slide-in');
            let imagenesHTML = '';
            for (let i = 1; i <= 1; i++) {
                if (repuesto['imagen' + i]) {
                    imagenesHTML += `<img src="${repuesto['imagen' + i].replace('.', '')}" alt="">`;
                }
            }
            divRepuesto.innerHTML = 
            `<div class="repuestosDiva">${imagenesHTML}</div><div class="divr"><h3>${repuesto.nombre_repuesto}</h3></div><div class="imglr"><img src="./carpetaeuromanimagenes/logo2.png" alt=""></div></div><div class="imglW"><a class="what" href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ${repuesto.nombre_repuesto} y quiero obtener más información sobre el producto."></a><img src="https://static.vecteezy.com/system/resources/thumbnails/022/794/113/small/3d-render-whatsapp-logo-icon-isolated-on-transparent-background-free-png.png" alt="x"></div>                
            `;
            detallesRepuesto.appendChild(divRepuesto);

            setTimeout(() => {
                divRepuesto.classList.add('show2');
            }, 10);
        });

        crearBotonesPaginacion(repuestos.length, pagina, (pagina) => cargarRepuestosPagina(repuestos, pagina));
    }, 100);
}

// Cargar todos los repuestos inicialmente
cargarTodosRepuestos();
