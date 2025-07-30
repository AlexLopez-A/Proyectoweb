<?php include 'includes/header.php'; ?>

<section id="index" class="contenido-principal">
    <div class="container">
        <center><h1>C.C Construccion </h1></center>
    <p>Somos una empresa dedicada a ofrecer servicios profesionales de construccion, 
        comprometida con la calidad, la puntualidad y la satisfacción de nuestros clientes. 
        Realizamos construcciones, remodelaciones, ampliaciones, acabados y mantenimiento para viviendas.
         Contamos con un equipo capacitado y con experiencia,
        listos para hacer realidad tus proyectos con responsabilidad y eficiencia.</p>
    </div>

    

        <!-- [NUEVOOOOOOOOOOOOOOOOOOOOOOOO] -->
<section class="galeria-proyectos">
    <h2>Proyectos</h2>
    <div class="contenedor-galeria">
        <!-- Proyecto 1 -->
        <div class="proyecto-card">
            <div class="imagen-container">
                <img src="img/img74.jpg" alt="Proyecto de construcción 1">
                <div class="hover-efecto">
                    <i class="fas fa-search-plus"></i> <!-- Ícono de lupa -->
                </div>
            </div>
            <div class="descripcion-proyecto">
                <h3>Escaleras exteriores</h3>
                <p>Las escaleras exteriores marcan la diferencia. 
                   Fabricamos escaleras sólidas, seguras y hermosas, 
                   hechas a medida para su patio, pared o entrada.</p>
                <span class="fecha-proyecto">Finalizado: Enero 2023</span>
            </div>
        </div>

        <!-- Proyecto 2 -->
        <div class="proyecto-card">
            <div class="imagen-container">
                <img src="img/img7.jpg" alt="Proyecto de construcción 2">
                <div class="hover-efecto">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            <div class="descripcion-proyecto">
                <h3>Patios</h3>
                <p> un patio bien construido se convierte en una extensión de su hogar.
                     Diseñamos e instalamos patios con adoquines de calidad o piedra natural 
                     que se adaptan a su espacio y estilo de vida.</p>
                <span class="fecha-proyecto">Finalizado: Marzo 2023</span>
            </div>
        </div>

        <!-- Proyecto 3 -->
        <div class="proyecto-card">
            <div class="imagen-container">
                <img src="img/img73.jpg" alt="Proyecto de construcción 3">
                <div class="hover-efecto">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            <div class="descripcion-proyecto">
                <h3>Aceras</h3>
                <p>Construccion de aceras con acabados implecables y limpios,
                   reemplazando concreto antiguo o construyendo nuevos 
                   caminos con detalles unicos para su hogar</p>
                <span class="fecha-proyecto">Finalizado: Mayo 2023</span>
            </div>
        </div>
    </div>
</section>

<!-- [MODAL CARRUSEL AGREGADO] -->
 
<div id="modal-carrusel" class="modal">
    <span class="cerrar-modal">&times;</span>
    <div class="modal-contenido">
        <div class="carrusel-slides">
            <!-- Las imágenes se insertarán dinámicamente con JavaScript -->
        </div>
        <a class="anterior">&#10094;</a>
        <a class="siguiente">&#10095;</a>
        <div class="indicadores-carrusel">
            <!-- Los indicadores se generarán dinámicamente -->
        </div>
    </div>
    <div class="descripcion-modal">
        <h3 id="titulo-modal"></h3>
        <p id="texto-modal"></p>
    </div>
</div>


<!-- [SECCIÓN CARRUSEL FLIP AGREGADA] -->
 <section id="proyectos" class="seccion-flip-cards">

    <h2>Nuestro Proceso de Trabajo</h2>
    <p class="subtitulo">Haz clic en cada imagen para conocer nuestros métodos</p>
    
    <div class="contenedor-carrusel-flip">
        <!-- Tarjeta 1 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/imagen1.jpg" alt="Proceso de construcción 1">
                </div>
                <div class="flip-card-back">
                    <h3>Planificación</h3>
                    <p>Desarrollamos planes detallados con visualizaciones 3D para garantizar que el proyecto cumpla con todas tus expectativas.</p>
                </div>
            </div>
        </div>
        
        <!-- Tarjeta 2 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/imagen2.jpg" alt="Proceso de construcción 2">
                </div>
                <div class="flip-card-back">
                    <h3>Materiales</h3>
                    <p>Trabajamos solo con materiales de primera calidad, garantizando durabilidad y acabados perfectos.</p>
                </div>
            </div>
        </div>
        
 <!-- Tarjeta 2 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/img/img1.jpg" alt="Proceso de construcción 2">
                </div>
                <div class="flip-card-back">
                    <h3>Materiales</h3>
                    <p>Trabajamos solo con materiales de primera calidad, garantizando durabilidad y acabados perfectos.</p>
                </div>
            </div>
        </div>


       


         <!-- Tarjeta 2 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="img/img/img3.jpg" alt="Proceso de construcción 2">
                </div>
                <div class="flip-card-back">
                    <h3>Materiales</h3>
                    <p>Trabajamos solo con materiales de primera calidad, garantizando durabilidad y acabados perfectos.</p>
                </div>
            </div>
        </div>
       
    </div>
        <div class="controles-carrusel">
        <button class="control-anterior">‹</button>
        <div class="puntos-indicadores"></div>
        <button class="control-siguiente">›</button>
    </div>
</section>

<!-- [SECCIÓN SERVICIOS AGREGADA] -->
<section id="servicios" class="servicios-constructora">
    <div class="container">
        <h2>Nuestros Servicios</h2>
        <p class="subtitulo-servicios">Soluciones integrales para cada etapa de tu proyecto</p>
        
        <div class="grid-servicios">
            <!-- Servicio 1 -->
            <div class="card-servicio">
                <div class="icono-servicio">
                    <i class="fas fa-home"></i>
                </div>
                <h3>Construcciones</h3>
                <ul>
                    <li>Casas habitación</li>
                    <li>Departamentos</li>
                    <li>Condominios</li>
                    <li>Remodelaciones</li>
                </ul>
            </div>
            
            <!-- Servicio 2 -->
            <div class="card-servicio">
                <div class="icono-servicio">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Remodelaciones</h3>
                <ul>
                    <li>Oficinas corporativas</li>
                    <li>Locales comerciales</li>
                    <li>Centros comerciales</li>
                    <li>Restaurantes</li>
                </ul>
            </div>
            
            <!-- Servicio 3 -->
            <div class="card-servicio">
                <div class="icono-servicio">
                    <i class="fas fa-industry"></i>
                </div>
                <h3>Demoliciones</h3>
                <ul>
                    <li>Naves industriales</li>
                    <li>Almacenes</li>
                    <li>Plantas de producción</li>
                    <li>Parques industriales</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="contactos" class="contactos-constructora">
    <div class="container">
        <h2>Contáctanos</h2>
        <p class="subtitulo-contactos">Estamos aquí para ayudarte con tu proyecto de construcción</p>
        <p>Correo: </p>
        <p>whatssap: </p>
    </div>
</section>
<?php include 'includes/footer.php'; ?>