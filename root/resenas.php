<?php
include 'includes/config.php';
include 'includes/header.php';
?>

<h1>Reseñas de Clientes</h1>

<div class="resenas-container">
    <?php
    $stmt = $conn->query("SELECT * FROM resenas ORDER BY fecha DESC");
    while ($resena = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="resena-item">';
        echo '<h3>' . htmlspecialchars($resena['nombre']) . '</h3>';
        echo '<small>' . date('d/m/Y', strtotime($resena['fecha'])) . '</small>';
        echo '<p>' . htmlspecialchars($resena['resena']) . '</p>';
        echo '</div>';
    }
    ?>
</div>

<div class="resena-form">
    <h2>Agregar tu reseña</h2>
    <form action="agregar_resena.php" method="post">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <input type="email" name="correo" placeholder="Tu correo electrónico" required>
        <textarea name="resena" placeholder="Tu reseña" rows="5" required></textarea>
        <button type="submit">Enviar Reseña</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>