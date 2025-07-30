<?php
include 'includes/config.php';
include 'includes/header.php';

if (isset($_GET['id'])) {
    $stmt = $conn->prepare("SELECT * FROM proyectos WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $proyecto = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($proyecto) {
        echo '<div class="proyecto-detalle">';
        echo '<h1>' . htmlspecialchars($proyecto['titulo']) . '</h1>';
        echo '<p>' . htmlspecialchars($proyecto['descripcion_larga']) . '</p>';
        
        echo '<div class="galeria">';
        $imagenes = json_decode($proyecto['imagenes'], true);
        foreach ($imagenes as $imagen) {
            echo '<img src="img/' . htmlspecialchars($imagen) . '" alt="Imagen del proyecto">';
        }
        echo '</div>';
        
        echo '</div>';
    } else {
        echo '<p>Proyecto no encontrado</p>';
    }
} else {
    echo '<p>No se especificó un proyecto</p>';
}

include 'includes/footer.php';
?>