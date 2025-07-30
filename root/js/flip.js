// [SCRIPT CARRUSEL FLIP AGREGADO]
document.addEventListener('DOMContentLoaded', function() {
    const flipCards = document.querySelectorAll('.flip-card');
    const contenedor = document.querySelector('.contenedor-carrusel-flip');
    const btnAnterior = document.querySelector('.control-anterior');
    const btnSiguiente = document.querySelector('.control-siguiente');
    const puntosContainer = document.querySelector('.puntos-indicadores');
    
    // Crear indicadores de puntos
    flipCards.forEach((_, index) => {
        const punto = document.createElement('span');
        punto.addEventListener('click', () => {
            scrollToCard(index);
        });
        puntosContainer.appendChild(punto);
    });
    
    const puntos = document.querySelectorAll('.puntos-indicadores span');
    puntos[0].classList.add('activo');
    
    // Evento para flip cards
    flipCards.forEach(card => {
        card.addEventListener('click', function() {
            // Si ya está flipped, no hacer nada (para evitar doble click)
            if (this.classList.contains('flipped')) return;
            
            // Voltear todas las demás tarjetas a su posición original
            flipCards.forEach(c => {
                if (c !== this) c.classList.remove('flipped');
            });
            
            // Voltear esta tarjeta
            this.classList.toggle('flipped');
        });
    });
    
    // Navegación del carrusel
    btnAnterior.addEventListener('click', () => {
        contenedor.scrollBy({ left: -300, behavior: 'smooth' });
    });
    
    btnSiguiente.addEventListener('click', () => {
        contenedor.scrollBy({ left: 300, behavior: 'smooth' });
    });
    
    // Actualizar indicadores al hacer scroll
    contenedor.addEventListener('scroll', () => {
        const scrollPos = contenedor.scrollLeft;
        const cardWidth = flipCards[0].offsetWidth + 30; // Ancho + gap
        
        const activeIndex = Math.round(scrollPos / cardWidth);
        updatePuntos(activeIndex);
    });
    
    function scrollToCard(index) {
        const cardWidth = flipCards[0].offsetWidth + 30;
        contenedor.scrollTo({
            left: index * cardWidth,
            behavior: 'smooth'
        });
    }
    
    function updatePuntos(index) {
        puntos.forEach((punto, i) => {
            punto.classList.toggle('activo', i === index);
        });
    }
});