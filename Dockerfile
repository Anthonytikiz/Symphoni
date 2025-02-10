FROM php:8.3.6-fpm

# Définir la variable d'environnement HOME
ENV HOME=/root

# Installation des dépendances nécessaires
RUN apt-get update && apt-get install -y \
    zip git unzip libxml2-dev libxslt-dev \
    libicu-dev libzip-dev && \
    docker-php-ext-configure zip && \
    docker-php-ext-install zip

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définition du répertoire de travail
WORKDIR /var/www

# Copie des fichiers du projet
COPY . .

# Exécution de Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --ignore-platform-reqs

# Définition du port exposé
ENV PORT=9000
EXPOSE 9000

# Commande pour démarrer PHP-FPM
CMD ["php-fpm", "--nodaemonize", "--fpm-config", "/usr/local/etc/php-fpm.conf"]
