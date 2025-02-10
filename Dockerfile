# Image de base
FROM php:8.3.6-fpm

# Installer les dépendances
RUN apt-get update && apt-get install -y \
    nginx zip git unzip libxml2-dev libxslt-dev \
    libicu-dev libzip-dev && \
    docker-php-ext-configure zip && \
    docker-php-ext-install zip

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail
WORKDIR /var/www

# Copier les fichiers du projet
COPY . .

# Installer les dépendances PHP avec Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --ignore-platform-reqs

# Copier la configuration NGINX
COPY nginx.conf /etc/nginx/nginx.conf

# Exposer le port 80
EXPOSE 80

# Lancer NGINX et PHP-FPM ensemble
CMD service nginx start && php-fpm --nodaemonize
