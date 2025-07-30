<?php
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $resena = $_POST['resena'];
    
    $stmt = $conn->prepare("INSERT INTO resenas (nombre, correo, resena) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $correo, $resena]);
    
    header('Location: resenas.php?success=1');
    exit;
} else {
    header('Location: resenas.php');
    exit;
}
?>