FROM php:8.1-apache

# Copiar todos los archivos del proyecto al directorio raíz de Apache
COPY . /var/www/html/

# Exponer el puerto 80 para HTTP
EXPOSE 80

# No necesitas comando CMD, porque la imagen php:apache ya arranca apache automáticamente
