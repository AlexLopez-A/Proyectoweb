<?php
$host = "localhost"; // Cambiar por el host de Hostinger
$dbname = "tu_basededatos";
$username = "tu_usuario";
$password = "tu_contraseña";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Crear tablas si no existen
$sql_proyectos = "CREATE TABLE IF NOT EXISTS proyectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    imagen_principal VARCHAR(255) NOT NULL,
    descripcion_corta TEXT NOT NULL,
    descripcion_larga TEXT NOT NULL,
    imagenes TEXT NOT NULL -- JSON con rutas de imágenes
)";

$sql_resenas = "CREATE TABLE IF NOT EXISTS resenas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    resena TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$conn->exec($sql_proyectos);
$conn->exec($sql_resenas);
?>