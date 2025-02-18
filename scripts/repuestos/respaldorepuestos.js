let subcategoriasSeleccionadas = {};
let categoriasExpandidas = {};
let todosRepuestos = []; // Variable global para almacenar todos los repuestos
const repuestosPorPagina = 10;


// Función para cargar las subcategorías al hacer clic en una categoría
function cargarSubcategorias(categoriaId, nombreCategoria) {
    // Obtener el elemento de la lista de categorías correspondiente a la categoría seleccionada
    const listaCategorias = document.getElementById('lista-categorias');
    const categoriaSeleccionada = listaCategorias.querySelector(`[data-categoria-id="${categoriaId}"]`);

    // Ocultar subcategorías de otras categorías
    Array.from(listaCategorias.children).forEach(categoria => {
        if (categoria !== categoriaSeleccionada) {
            const subcategorias = categoria.querySelector('.subcategorias');
            if (subcategorias) subcategorias.style.display = 'none';
        }
    });

    // Si ya se han cargado las subcategorías, mostrarlas
    if (categoriaSeleccionada.subcategoriasCargadas) {
        const subcategorias = categoriaSeleccionada.querySelector('.subcategorias');
        subcategorias.style.display = 'block';
        return; // Detener la ejecución
    }

    // Hacer una petición AJAX para obtener las subcategorías de la categoría seleccionada
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'obtener_subcategorias.php?categoria_id=' + categoriaId, true);
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            // Procesar la respuesta y cargar las subcategorías
            const subcategorias = JSON.parse(xhr.responseText);
            const subcategoriasContainer = document.createElement('ul');
            subcategoriasContainer.classList.add('subcategorias');
            subcategorias.forEach(subcategoria => {
                const item = document.createElement('li');
                item.textContent = subcategoria.nombre_subcategoria;
                item.addEventListener('click', () => cargarRepuestos(subcategoria.subcategoria_id, subcategoria.nombre_subcategoria)); // Pasar el nombre de la subcategoría
                subcategoriasContainer.appendChild(item);

                // Verificar si esta subcategoría estaba seleccionada previamente y marcarla
                if (subcategoriasSeleccionadas[categoriaId] === subcategoria.subcategoria_id) {
                    item.classList.add('selected'); // Agrega la clase 'selected' cuando se selecciona
                }

                // Remover la clase 'selected' de las subcategorías no seleccionadas
                item.addEventListener('click', function() {
                    Array.from(subcategoriasContainer.children).forEach(subcat => {
                        if (subcat !== item) {
                            subcat.classList.remove('selected');
                        }
                    });
                });
            });
            categoriaSeleccionada.appendChild(subcategoriasContainer);
            categoriaSeleccionada.subcategoriasCargadas = true; // Marcar que las subcategorías han sido cargadas
            
            // Si la categoría estaba expandida previamente, mantenerla expandida
            if (categoriasExpandidas[categoriaId]) {
                subcategoriasContainer.style.display = 'none';
            } else {
                subcategoriasContainer.style.display = 'block';
            }
        } else {
            console.error('Error al cargar subcategorías');
        }
    };
    xhr.onerror = function() {
        console.error('Error de conexión');
    };
    xhr.send();

    // Mantener un registro de las categorías expandidas
    categoriasExpandidas[categoriaId] = true;
}



// Función para cargar los repuestos al hacer clic en una subcategoría
function cargarRepuestos(subcategoriaId, nombreSubcategoria, pagina = 1) {
    // Almacenar la subcategoría seleccionada
    const categoriaId = subcategoriasSeleccionadas[subcategoriaId];
    subcategoriasSeleccionadas[categoriaId] = subcategoriaId;

    // Mostrar el nombre de la subcategoría seleccionada en el contenido
    const detallesRepuesto = document.getElementById('detalles-repuesto');
    detallesRepuesto.innerHTML = `<div class="h2clase"><h2>${nombreSubcategoria}</h2><br><h2>Detalles de los repuestos</h2></div>`;

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
                imagenesHTML += `<img src="${repuesto['imagen' + i]}" alt="">`;
            }
        }
        divRepuesto.innerHTML = `
        <div class="divr"><h3>${repuesto.nombre_repuesto}</h3></div><div class="imglr"><img src="../carpetaeuromanimagenes/logo2.png" alt=""></div></div><div class="imglW"><a class="what" href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ${repuesto.nombre_repuesto} y quiero obtener más información sobre el producto."></a><img src="https://static.vecteezy.com/system/resources/thumbnails/022/794/113/small/3d-render-whatsapp-logo-icon-isolated-on-transparent-background-free-png.png" alt="x"></div>
            ${imagenesHTML}
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

    for (let i = 1; i <= totalPaginas; i++) {
        const boton = document.createElement('button');
        boton.textContent = i;
        boton.addEventListener('click', () => callback(i));
        if (i === paginaActual) {
            boton.classList.add('activo');
        }
        paginacion.appendChild(boton);
    }
}

// Función para cargar repuestos por búsqueda
function cargarRepuestosPorBusqueda(textoBusqueda, pagina = 1) {
    // Mostrar el nombre de la sección
    const detallesRepuesto = document.getElementById('detalles-repuesto');
    detallesRepuesto.innerHTML = `<div class="h2clase"><h2>Resultados de la búsqueda</h2><br><h2>Detalles de los repuestos</h2></div>`;

    // Filtrar los repuestos por el texto de búsqueda
    const repuestosFiltrados = todosRepuestos.filter(repuesto => repuesto.nombre_repuesto.toLowerCase().includes(textoBusqueda.toLowerCase()));

    // Calcular los índices de los repuestos a mostrar en la página actual
    const inicio = (pagina - 1) * repuestosPorPagina;
    const fin = inicio + repuestosPorPagina;
    const repuestosPagina = repuestosFiltrados.slice(inicio, fin);

    // Mostrar los repuestos filtrados en la página actual
    repuestosPagina.forEach(repuesto => {
        const divRepuesto = document.createElement('div');
        divRepuesto.classList.add('repuesto');
        let imagenesHTML = '';
        for (let i = 1; i <= 10; i++) {
            if (repuesto['imagen' + i]) {
                imagenesHTML += `<img src="${repuesto['imagen' + i]}" alt="">`;
            }
        }
        divRepuesto.innerHTML = `
        <div class="divr"><h3>${repuesto.nombre_repuesto}</h3></div>
        <div class="imglr"><img src="../carpetaeuromanimagenes/logo2.png" alt=""></div>
        </div><div class="imglW"><a class="what" href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ${repuesto.nombre_repuesto} y quiero obtener más información sobre el producto."></a><img src="https://static.vecteezy.com/system/resources/thumbnails/022/794/113/small/3d-render-whatsapp-logo-icon-isolated-on-transparent-background-free-png.png" alt="x"></div>
            ${imagenesHTML}
        `;
        detallesRepuesto.appendChild(divRepuesto);
    });

    // Crear los botones de navegación
    crearBotonesPaginacion(repuestosFiltrados.length, pagina, (pagina) => cargarRepuestosPorBusqueda(textoBusqueda, pagina));
}


function cargarCategorias() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'obtener_categorias.php', true);
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            const categorias = JSON.parse(xhr.responseText);
            const listaCategorias = document.getElementById('lista-categorias');
            listaCategorias.innerHTML = '';
            categorias.forEach(categoria => {
                const item = document.createElement('li');
                item.textContent = categoria.nombre_categoria;
                item.setAttribute('data-categoria-id', categoria.categoria_id); // Añadir atributo para identificar la categoría
                item.addEventListener('click', () => cargarSubcategorias(categoria.categoria_id, categoria.nombre_categoria));

                // Si la subcategoría estaba seleccionada previamente, marcarla
                if (subcategoriasSeleccionadas[categoria.categoria_id]) {
                    item.classList.add('selected');
                }

                listaCategorias.appendChild(item);

                // Cargar subcategorías de manera predeterminada al cargar la página
                cargarSubcategorias(categoria.categoria_id, categoria.nombre_categoria);
            });
        } else {
            console.error('Error al cargar categorías');
        }
    };
    xhr.onerror = function() {
        console.error('Error de conexión');
    };
    xhr.send();
}

// Cargar las categorías al cargar la página
window.onload = () => {
    cargarCategorias();
    // Cargar todos los repuestos inicialmente
    cargarTodosRepuestos();
};

// Función para cargar todos los repuestos
function cargarTodosRepuestos(pagina = 1) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'obtener_todos_repuestos.php', true);
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
    detallesRepuesto.innerHTML = `<div class="h2clase"><h2>Todos los repuestos</h2><br><h2>Detalles de los repuestos</h2></div>`;
    
    const inicio = (pagina - 1) * repuestosPorPagina;
    const fin = inicio + repuestosPorPagina;
    const repuestosPagina = repuestos.slice(inicio, fin);

    repuestosPagina.forEach(repuesto => {
        const divRepuesto = document.createElement('div');
        divRepuesto.classList.add('repuesto');
        let imagenesHTML = '';
        for (let i = 1; i <= 1; i++) {
            if (repuesto['imagen' + i]) {
                imagenesHTML += `<img src="${repuesto['imagen' + i]}" alt="">`;
            }
        }
        divRepuesto.innerHTML = `
        <div class="divr"><h3>${repuesto.nombre_repuesto}</h3></div><div class="imglr"><img src="../carpetaeuromanimagenes/logo2.png" alt=""></div></div><div class="imglW"><a class="what" href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ${repuesto.nombre_repuesto} y quiero obtener más información sobre el producto."></a><img src="https://static.vecteezy.com/system/resources/thumbnails/022/794/113/small/3d-render-whatsapp-logo-icon-isolated-on-transparent-background-free-png.png" alt="x"></div>
            ${imagenesHTML}
        `;
        detallesRepuesto.appendChild(divRepuesto);
    });

    // Crear los botones de navegación
    crearBotonesPaginacion(repuestos.length, pagina, (pagina) => cargarRepuestosPagina(repuestos, pagina));
}

// Evento para búsqueda de repuestos
document.getElementById('searchInput').addEventListener('input', function() {
    const textoBusqueda = this.value.trim();
    if (textoBusqueda) {
        cargarRepuestosPorBusqueda(textoBusqueda);
    } else {
        cargarTodosRepuestos();
    }
});

// Cargar todos los repuestos inicialmente
cargarTodosRepuestos();
/**********************************************
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 




BIENNNNNNNNNNNNNNNNNN
 */

class RepuestosManager {
    constructor() {
        this.subcategoriasSeleccionadas = {};
        this.categoriasExpandidas = {};
        this.todosRepuestos = [];
        this.repuestosPorPagina = 10;
        this.init();
    }

    init() {
        window.onload = () => {
            this.cargarCategorias();
            this.cargarTodosRepuestos();
        };
        document.getElementById('searchInput').addEventListener('input', (event) => {
            const textoBusqueda = event.target.value.trim();
            if (textoBusqueda) {
                this.cargarRepuestosPorBusqueda(textoBusqueda);
            } else {
                this.cargarTodosRepuestos();
            }
        });
    }

    cargarCategorias() {
        fetch('obtener_categorias.php')
            .then(response => response.json())
            .then(categorias => {
                const listaCategorias = document.getElementById('lista-categorias');
                listaCategorias.innerHTML = '';
                categorias.forEach(categoria => {
                    const item = document.createElement('li');
                    item.textContent = categoria.nombre_categoria;
                    item.setAttribute('data-categoria-id', categoria.categoria_id);
                    item.addEventListener('click', () => this.toggleSubcategorias(categoria.categoria_id, categoria.nombre_categoria));
                    listaCategorias.appendChild(item);
                });
            })
            .catch(error => console.error('Error al cargar categorías', error));
    }

    toggleSubcategorias(categoriaId, nombreCategoria) {
        // Obtenemos el contenedor de la categoría seleccionada
        const categoriaSeleccionada = document.querySelector(`[data-categoria-id="${categoriaId}"]`);
    
        // Verificamos si la categoría ya está expandida
        if (this.categoriasExpandidas[categoriaId]) {
            // Si está expandida, la ocultamos
            this.categoriasExpandidas[categoriaId] = false;
            const subcategoriasContainer = categoriaSeleccionada.querySelector('.subcategorias');
            if (subcategoriasContainer) {
                subcategoriasContainer.style.display = 'none'; // Ocultamos las subcategorías
            }
        } else {
            // Si no está expandida, la mostramos
            this.categoriasExpandidas[categoriaId] = true;
            this.cargarSubcategorias(categoriaId, nombreCategoria);
        }
    }
    
    cargarSubcategorias(categoriaId, nombreCategoria) {
        // Hacemos la solicitud para cargar las subcategorías
        fetch(`obtener_subcategorias.php?categoria_id=${categoriaId}`)
            .then(response => response.json())
            .then(subcategorias => {
                // Obtenemos el contenedor de la categoría seleccionada
                const categoriaSeleccionada = document.querySelector(`[data-categoria-id="${categoriaId}"]`);
    
                // Verificamos si ya existe el contenedor de subcategorías
                let subcategoriasContainer = categoriaSeleccionada.querySelector('.subcategorias');
                if (!subcategoriasContainer) {
                    // Si no existe, lo creamos
                    subcategoriasContainer = document.createElement('ul');
                    subcategoriasContainer.classList.add('subcategorias');
                    categoriaSeleccionada.appendChild(subcategoriasContainer);
                }
    
                // Limpiamos las subcategorías anteriores
                subcategoriasContainer.innerHTML = '';
    
                // Añadimos las nuevas subcategorías
                subcategorias.forEach(subcategoria => {
                    const item = document.createElement('li');
                    item.textContent = subcategoria.nombre_subcategoria;
                    item.addEventListener('click', () => this.cargarRepuestos(subcategoria.subcategoria_id, subcategoria.nombre_subcategoria));
                    subcategoriasContainer.appendChild(item);
                });
    
                // Mostramos las subcategorías
                subcategoriasContainer.style.display = 'block';
            })
            .catch(error => console.error('Error al cargar subcategorías', error));
    }
    
    
    cargarRepuestos(subcategoriaId, nombreSubcategoria, pagina = 1) {
        if (this.todosRepuestos.length === 0) {
            this.cargarTodosRepuestos(() => {
                this.filtrarYMostrarRepuestosPorSubcategoria(subcategoriaId, nombreSubcategoria, pagina);
            });
        } else {
            this.filtrarYMostrarRepuestosPorSubcategoria(subcategoriaId, nombreSubcategoria, pagina);
        }
    }

    filtrarYMostrarRepuestosPorSubcategoria(subcategoriaId, nombreSubcategoria, pagina) {
        const detallesRepuesto = document.getElementById('detalles-repuesto');
        detallesRepuesto.innerHTML = `<div class="h2clase"><h2>${nombreSubcategoria}</h2><br><h2>Detalles de los repuestos</h2></div>`;
        const repuestosFiltrados = this.todosRepuestos.filter(repuesto => repuesto.subcategoria_id === subcategoriaId);
        this.mostrarRepuestos(repuestosFiltrados, pagina);
    }

    cargarTodosRepuestos(callback = null, pagina = 1) {
        fetch('obtener_todos_repuestos.php')
            .then(response => response.json())
            .then(repuestos => {
                this.todosRepuestos = repuestos;
                if (callback) callback();
                else this.mostrarRepuestos(this.todosRepuestos, pagina);
            })
            .catch(error => console.error('Error al cargar repuestos', error));
    }

    cargarRepuestosPorBusqueda(textoBusqueda, pagina = 1) {
        if (this.todosRepuestos.length === 0) {
            this.cargarTodosRepuestos(() => {
                this.filtrarYMostrarRepuestos(textoBusqueda, pagina);
            });
        } else {
            this.filtrarYMostrarRepuestos(textoBusqueda, pagina);
        }
    }

    filtrarYMostrarRepuestos(textoBusqueda, pagina) {
        const repuestosFiltrados = this.todosRepuestos.filter(repuesto => 
            repuesto.nombre_repuesto.toLowerCase().includes(textoBusqueda.toLowerCase())
        );
        this.mostrarRepuestos(repuestosFiltrados, pagina);
    }

   
    crearBotonesPaginacion(totalRepuestos, paginaActual, callback) {
        const paginacion = document.getElementById('paginacion');
        paginacion.innerHTML = ''; // Limpiar botones anteriores
        const totalPaginas = Math.ceil(totalRepuestos / this.repuestosPorPagina);
    
        for (let i = 1; i <= totalPaginas; i++) {
            const boton = document.createElement('button');
            boton.textContent = i;
            boton.addEventListener('click', () => callback(i));
            if (i === paginaActual) {
                boton.classList.add('activo');
            }
            paginacion.appendChild(boton);
        }
    }
    

    mostrarRepuestos(repuestos, pagina) {
        const detallesRepuesto = document.getElementById('detalles-repuesto');
        detallesRepuesto.innerHTML = `<div class="h2clase"><h2>Detalles de los repuestos</h2></div>`;
        const inicio = (pagina - 1) * this.repuestosPorPagina;
        const fin = inicio + this.repuestosPorPagina;
        const repuestosPagina = repuestos.slice(inicio, fin);
        repuestosPagina.forEach(repuesto => {
            const divRepuesto = document.createElement('div');
            divRepuesto.classList.add('repuesto');
            divRepuesto.innerHTML = `
                <div class="divr"><h3>${repuesto.nombre_repuesto}</h3></div> 
                <img src="../imagenes/${repuesto.imagen1}" alt="Imagen de ${repuesto.nombre_repuesto}" class="img-thumbnail" 
                    data-bs-toggle="modal" data-bs-target="#modalImagenRepuesto" 
                    data-bs-img-src="../imagenes/${repuesto.imagen1}" 
                    data-bs-name="${repuesto.nombre_repuesto}">               
                <div class="imglW"><a class="what" href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ${repuesto.nombre_repuesto} y quiero obtener más información sobre el producto."></a><img src="https://static.vecteezy.com/system/resources/thumbnails/022/794/113/small/3d-render-whatsapp-logo-icon-isolated-on-transparent-background-free-png.png" alt="x"></div>
                
            `;
            detallesRepuesto.appendChild(divRepuesto);
        });
    
        // Llamar a la función de paginación
        this.crearBotonesPaginacion(repuestos.length, pagina, (paginaSeleccionada) => this.mostrarRepuestos(repuestos, paginaSeleccionada));
    
        // Evento para cambiar la imagen y el nombre en el modal al hacer clic en una imagen de repuesto
        const imagenesRepuesto = document.querySelectorAll('.repuesto img[data-bs-toggle="modal"]');
        imagenesRepuesto.forEach(imagen => {
            imagen.addEventListener('click', (e) => {
                const imgSrc = e.target.getAttribute('data-bs-img-src');
                const repuestoNombre = e.target.getAttribute('data-bs-name');
                document.getElementById('imagenModal').src = imgSrc;
                document.getElementById('modalImagenRepuestoLabel').textContent = `Imagen de ${repuestoNombre}`;  // Cambia el título del modal
            });
        });
    }


    /* mostrarRepuestos(repuestos, pagina) {
        const detallesRepuesto = document.getElementById('detalles-repuesto');
        detallesRepuesto.innerHTML = `<div class="h2clase"><h2>Detalles de los repuestos</h2></div>`;
        const inicio = (pagina - 1) * this.repuestosPorPagina;
        const fin = inicio + this.repuestosPorPagina;
        const repuestosPagina = repuestos.slice(inicio, fin);
        repuestosPagina.forEach(repuesto => {
            const divRepuesto = document.createElement('div');
            divRepuesto.classList.add('repuesto');
            divRepuesto.innerHTML = `
                <div class="divr"><h3>${repuesto.nombre_repuesto}</h3></div>
                <div class="imglr"><img src="../carpetaeuromanimagenes/logo2.png" alt=""></div>
                <div class="imglW"><a class="what" href="https://wa.me/593994658275/?text=¡Hola! Me interesa el repuesto ${repuesto.nombre_repuesto} y quiero obtener más información sobre el producto."></a><img src="https://static.vecteezy.com/system/resources/thumbnails/022/794/113/small/3d-render-whatsapp-logo-icon-isolated-on-transparent-background-free-png.png" alt="x"></div>
                <img src="../imagenes/${repuesto.imagen1}" alt="Imagen de ${repuesto.nombre_repuesto}" class="img-thumbnail" 
                    data-bs-toggle="modal" data-bs-target="#modalImagenRepuesto" 
                    data-bs-img-src="../imagenes/${repuesto.imagen1}" 
                    data-bs-name="${repuesto.nombre_repuesto}">
            `;
            detallesRepuesto.appendChild(divRepuesto);
        });
    
        // Llamar a la función de paginación
        this.crearBotonesPaginacion(repuestos.length, pagina, (paginaSeleccionada) => this.mostrarRepuestos(repuestos, paginaSeleccionada));
    
        // Evento para cambiar la imagen y el nombre en el modal al hacer clic en una imagen de repuesto
        const imagenesRepuesto = document.querySelectorAll('.repuesto img[data-bs-toggle="modal"]');
        imagenesRepuesto.forEach(imagen => {
            imagen.addEventListener('click', (e) => {
                const imgSrc = e.target.getAttribute('data-bs-img-src');
                const repuestoNombre = e.target.getAttribute('data-bs-name');
                document.getElementById('imagenModal').src = imgSrc;
                document.getElementById('modalImagenRepuestoLabel').textContent = `Imagen de ${repuestoNombre}`;  // Cambia el título del modal
            });
        });
    } */
}

new RepuestosManager();
