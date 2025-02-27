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
        fetch('obtener_categorias_cabina.php')
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
        if (!this.categoriasExpandidas[categoriaId]) {
            this.categoriasExpandidas[categoriaId] = true;
            this.cargarSubcategorias(categoriaId, nombreCategoria);
        }
    }
    
    cargarSubcategorias(categoriaId, nombreCategoria) {
        fetch(`obtener_subcategorias_cabina.php?categoria_id=${categoriaId}`)
            .then(response => response.json())
            .then(subcategorias => {
                const categoriaSeleccionada = document.querySelector(`[data-categoria-id="${categoriaId}"]`);
                let subcategoriasContainer = categoriaSeleccionada.querySelector('.subcategorias');
                if (!subcategoriasContainer) {
                    subcategoriasContainer = document.createElement('ul');
                    subcategoriasContainer.classList.add('subcategorias');
                    categoriaSeleccionada.appendChild(subcategoriasContainer);
                }
    
                subcategoriasContainer.innerHTML = '';
                subcategorias.forEach(subcategoria => {
                    const item = document.createElement('li');
                    item.textContent = subcategoria.nombre_subcategoria;
                    item.setAttribute('data-subcategoria-id', subcategoria.subcategoria_id);
                    item.addEventListener('click', (event) => this.seleccionarSubcategoria(event, subcategoria.subcategoria_id, subcategoria.nombre_subcategoria));
                    subcategoriasContainer.appendChild(item);
                });
    
                subcategoriasContainer.style.display = 'block';
            })
            .catch(error => console.error('Error al cargar subcategorías', error));
    }
    
    seleccionarSubcategoria(event, subcategoriaId, nombreSubcategoria) {
        // Eliminar selección previa
        document.querySelectorAll('.subcategorias li').forEach(li => li.classList.remove('seleccionada'));
    
        // Marcar como seleccionada
        const subcategoriaSeleccionada = event.target;
        subcategoriaSeleccionada.classList.add('seleccionada');
    
        // Cargar los repuestos de la subcategoría
        this.cargarRepuestos(subcategoriaId, nombreSubcategoria);
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
        fetch('obtener_todos_repuestos_cabina.php')
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
                <div style="display:flex;width:100%;height:20%;background-color:white;">
                    <h3>${repuesto.nombre_repuesto}</h3>
                </div> 
                <div style="display:flex;width:100%;height:80%;">
                    <img style="width:100%;height:100%;object-fit:fill;max-height:100%;" 
                        src="../imagenes/${repuesto.imagen1}" 
                        alt="Imagen de ${repuesto.nombre_repuesto}" 
                        class="img-thumbnail">
                </div>             
            `;
    
            // Hacer que todo el div sea clickeable
            divRepuesto.style.cursor = 'pointer';
            divRepuesto.addEventListener('click', () => {
                window.location.href = `detalle_repuestoC.php?repuesto_id=${repuesto.repuesto_id}`;
            });
    
            detallesRepuesto.appendChild(divRepuesto);
        });
    
        // Llamar a la función de paginación
        this.crearBotonesPaginacion(repuestos.length, pagina, (paginaSeleccionada) => this.mostrarRepuestos(repuestos, paginaSeleccionada));
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
