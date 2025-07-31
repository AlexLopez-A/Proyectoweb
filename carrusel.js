// [SCRIPT CARRUSEL AGREGADO]
document.addEventListener('DOMContentLoaded', function() {
    // Datos de los proyectos (puedes cargarlos dinámicamente con AJAX si lo prefieres)
    const proyectos = [
        {
            id: 1,
            titulo: "Escaleras de exteriores",
            descripcion: "Remodelacion de escaleras exteriores con acabados de alta calidad.",
            imagenes: ["img71.jpg", "img78.jpg", "img16.jpg","img27.jpg"]
        },
        {
            id: 2,
            titulo: "Patios",
            descripcion: "Diseño y construcción de patios con materiales sostenibles y modernos.",
            imagenes: ["img5.jpg", "img6.jpg", "img4.jpg","img42.jpg","img98.jpg"]
        },
        {
            id: 3,
            titulo: "Acabados en aceras",
            descripcion: "Trabajos de acabados finos en acereas, unicos para su hogar.",
            imagenes: ["imagen2.jpg", "img57.jpg", "img39.jpg","img38.jpg"]
        }
    ];

    // Variables del carrusel
    let slideIndex = 0;
    let proyectoActual = null;
    const modal = document.getElementById('modal-carrusel');
    const slidesContainer = document.querySelector('.carrusel-slides');
    const indicadoresContainer = document.querySelector('.indicadores-carrusel');
    const tituloModal = document.getElementById('titulo-modal');
    const textoModal = document.getElementById('texto-modal');

    // Configurar eventos para las tarjetas de proyecto
    document.querySelectorAll('.proyecto-card').forEach((card, index) => {
        card.addEventListener('click', function() {
            proyectoActual = proyectos[index];
            mostrarCarrusel(proyectoActual);
        });
    });

    // Mostrar el carrusel con las imágenes del proyecto
    function mostrarCarrusel(proyecto) {
        // Limpiar slides e indicadores anteriores
        slidesContainer.innerHTML = '';
        indicadoresContainer.innerHTML = '';
        
        // Configurar título y descripción
        tituloModal.textContent = proyecto.titulo;
        textoModal.textContent = proyecto.descripcion;
        
        // Crear slides para cada imagen
        proyecto.imagenes.forEach((imagen, i) => {
            const slide = document.createElement('img');
            slide.src =  imagen;
            slide.alt = proyecto.titulo + ' - Imagen ' + (i + 1);
            if (i === 0) slide.classList.add('activo');
            slidesContainer.appendChild(slide);
            
            // Crear indicadores
            const indicador = document.createElement('span');
            indicador.classList.add('indicador');
            if (i === 0) indicador.classList.add('activo');
            indicador.addEventListener('click', () => {
                mostrarSlide(i);
            });
            indicadoresContainer.appendChild(indicador);
        });
        
        slideIndex = 0;
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Evitar scroll de fondo
    }

    // Funciones de navegación
    function mostrarSlide(n) {
        const slides = document.querySelectorAll('.carrusel-slides img');
        const indicadores = document.querySelectorAll('.indicador');
        
        if (n >= slides.length) slideIndex = 0;
        if (n < 0) slideIndex = slides.length - 1;
        
        slides.forEach(slide => slide.classList.remove('activo'));
        indicadores.forEach(ind => ind.classList.remove('activo'));
        
        slides[slideIndex].classList.add('activo');
        indicadores[slideIndex].classList.add('activo');
    }

    function cambiarSlide(n) {
        mostrarSlide(slideIndex += n);
    }

    // Event listeners para controles
    document.querySelector('.anterior').addEventListener('click', () => cambiarSlide(-1));
    document.querySelector('.siguiente').addEventListener('click', () => cambiarSlide(1));
    document.querySelector('.cerrar-modal').addEventListener('click', () => {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    });

    // Cerrar al hacer clic fuera del contenido
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Navegación con teclado
    document.addEventListener('keydown', function(e) {
        if (modal.style.display === 'block') {
            if (e.key === 'ArrowLeft') cambiarSlide(-1);
            if (e.key === 'ArrowRight') cambiarSlide(1);
            if (e.key === 'Escape') {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    });
});