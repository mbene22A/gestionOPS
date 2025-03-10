# Utilisation de l'image officielle PHP avec les extensions nécessaires
FROM php:8.2-fpm

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Installation de Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Configuration du répertoire de travail
WORKDIR /var/www

# Copier les fichiers du projet dans le conteneur
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Donner les permissions nécessaires au dossier de cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Exposer le port 9000 pour PHP-FPM
EXPOSE 9000

# Commande de démarrage de PHP-FPM
CMD ["php-fpm"]