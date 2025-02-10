FROM php:8.3.6-fpm

# Définir la variable d'environnement HOME
ENV HOME=/root

# Installation des dépendances
RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev libjpeg-dev libfreetype6-dev \
    zip git unzip libxml2-dev libxslt-dev \
    libicu-dev libzip-dev && \
    docker-php-ext-configure zip && \
    docker-php-ext-install zip

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installation de Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash
ENV PATH="$HOME/.symfony*/bin:$PATH"

# Définition du répertoire de travail
WORKDIR /var/www

# Copie des fichiers du projet
COPY . .

RUN composer clear-cache

# Exécution de Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --ignore-platform-reqs

# Configuration de NGINX
COPY nginx.conf /etc/nginx/nginx.conf

# Port d'exposition
ENV PORT=80
EXPOSE 80

# Commande pour démarrer NGINX et PHP-FPM
CMD service nginx start && php-fpm --nodaemonize --fpm-config /usr/local/etc/php-fpm.conf
