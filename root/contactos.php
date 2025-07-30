<?php include 'includes/header.php'; ?>
    <h1>Contactos</h1>
    
    <div class="contacto-info">
        <h2>Información de Contacto</h2>
        <p><strong>Email:</strong> contacto@misitio.com</p>
        <p><strong>Teléfono:</strong> +123 456 7890</p>
        <p><strong>WhatsApp:</strong> <a href="https://wa.me/1234567890">+123 456 7890</a></p>
        <p><strong>Dirección:</strong> Calle Principal 123, Ciudad, País</p>
    </div>
    
    <div class="contacto-form">
        <h2>Envíanos un mensaje</h2>
        <form action="enviar_contacto.php" method="post">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
<?php include 'includes/footer.php'; ?>