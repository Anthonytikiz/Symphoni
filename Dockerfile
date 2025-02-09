# Utilisation d'une image PHP officielle
FROM php:8.1-fpm

# Installation des dépendances nécessaires
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip

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
RUN composer install --ignore-platform-reqs

# Exposition du port 9000 pour PHP-FPM
EXPOSE 9000

# Commande pour démarrer PHP-FPM
CMD ["php-fpm"]
