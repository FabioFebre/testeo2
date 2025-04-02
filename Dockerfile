#imagen de php
FROM php:8.1-apache

#Instalar dependencias necesarias para trabajar con postgreSQL
RUN  apt-get update && apt-get install -y \
    libpq-dev \
    && doctor-php-ext-install pdo pdo_pgsql pgsql

# Copiamos todo el contenido de mi proyecto al contenedor de PHP
COPY . /var/www/html/

#Exponemos el puerto 80
EXPOSE 80