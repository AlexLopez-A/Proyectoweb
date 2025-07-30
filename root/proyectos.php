<?php
include 'includes/config.php';
include 'includes/header.php';
?>

<h1>Nuestros Proyectos</h1>

<div class="proyectos-container">
    <?php
    $stmt = $conn->query("SELECT * FROM proyectos");
    while ($proyecto = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="proyecto">';
        echo '<img src="img/' . htmlspecialchars($proyecto['imagen_principal']) . '" alt="' . htmlspecialchars($proyecto['titulo']) . '">';
        echo '<h3>' . htmlspecialchars($proyecto['titulo']) . '</h3>';
        echo '<p>' . htmlspecialchars($proyecto['descripcion_corta']) . '</p>';
        echo '<a href="proyecto_detalle.php?id=' . $proyecto['id'] . '" class="btn-ver-mas">Ver más</a>';
        echo '</div>';
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>