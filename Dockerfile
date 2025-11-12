# Usamos una imagen oficial de PHP. La 8.2 cumple con tu composer.json (>=8.0)
FROM php:8.2-cli

# Establecemos el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copiamos todos los archivos del proyecto al directorio de trabajo
COPY . .

# (Opcional pero recomendado) Instalamos Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# ¡Importante! Tu app escribe en archivos JSON.
# Le damos permisos al usuario del servidor web ('www-data') para que pueda
# escribir en la carpeta actual y sus archivos (como order.json y users.json).
RUN chown -R www-data:www-data /var/www/html

# Cambiamos al usuario no-root por seguridad
USER www-data

# Exponemos el puerto 8000 (puedes usar otro, pero este es común)
EXPOSE 8000

# Este es el comando para iniciar tu servidor, basado en tu Procfile
# Escuchará en todas las IPs (0.0.0.0) en el puerto 8000
CMD ["php", "-S", "0.0.0.0:8000"]
