# Utilisation d'une image PHP officielle
FROM php:8.3.6-fpm

# Définir la variable d'environnement HOME pour éviter les problèmes avec Symfony CLI
ENV HOME=/root

# Installation des dépendances nécessaires
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip libxml2-dev libxslt-dev libicu-dev libzip-dev && \
    docker-php-ext-configure zip && \
    docker-php-ext-install zip

# Installation de Composer (gestionnaire de dépendances PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installation de Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash
ENV PATH="$HOME/.symfony*/bin:$PATH"

# Définition du répertoire de travail
WORKDIR /var/www

# Copie des fichiers du projet dans le container
COPY . .

# Permet l'exécution de Composer en tant que superutilisateur
ENV COMPOSER_ALLOW_SUPERUSER=1

# Installation des dépendances du projet avec Composer
RUN composer install

ENV PORT=9000
# Exposition du port 9000 pour PHP-FPM
EXPOSE 9000

# Commande pour démarrer PHP-FPM
CMD ["php-fpm"]
