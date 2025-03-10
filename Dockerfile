# Utilisation de l'image PHP officielle avec FPM
FROM php:8.3-fpm

# Installation des dépendances système et nettoyage après installation
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installation de Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Définition du répertoire de travail
WORKDIR /var/www

# Copier uniquement les fichiers nécessaires pour installer les dépendances
COPY composer.json composer.lock ./

# Installer les dépendances Laravel sans les dépendances de dev pour optimiser la prod
RUN composer install --no-dev --optimize-autoloader

# Copier le reste des fichiers du projet (après installation des dépendances)
COPY . .

# Modifier les permissions pour éviter les erreurs d'accès
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exposer le port 9000 (PHP-FPM)
EXPOSE 9000

# Démarrer PHP-FPM
CMD ["php-fpm"]
