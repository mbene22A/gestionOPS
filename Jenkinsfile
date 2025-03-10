pipeline {
    agent any

    environment {
        PHP_VERSION = '8.3'
        APP_DIR = 'gestionOPS'
        DB_CONNECTION = 'mysql'
        DB_HOST = 'db'
        DB_PORT = '3306'
        DB_DATABASE = 'gestion_etablissement'
        DB_USERNAME = 'root'
        DB_PASSWORD = ''
        PATH = "/usr/local/bin:$PATH"
    }

    stages {
        stage('Cloner le code') {
            steps {
                git branch: 'main', url: 'https://github.com/mbene22A/gestionOPS.git'
            }
        }

        stage('Build and Start Containers') {
            steps {
                sh 'docker-compose up --build -d'
            }
        }

        stage('Installer PHP et Composer') {
            steps {
                // Vérifie la version de PHP
                sh 'docker-compose exec app php -v'

                // Installe les dépendances via Composer dans le conteneur Docker
                sh 'docker-compose exec app composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Configurer l\'environnement') {
            steps {
                // Copier .env.example vers .env dans le conteneur Docker
                sh 'docker-compose exec app cp .env.example .env'
                
                // Générer la clé d'application et effectuer la mise en cache
                sh 'docker-compose exec app php artisan key:generate'
                sh 'docker-compose exec app php artisan config:cache'
            }
        }

        stage('Run Migrations') {
            steps {
                sh 'docker-compose exec app php artisan migrate --seed'
            }
        }

        stage('Run Tests') {
            steps {
                sh 'docker-compose exec app php artisan test'
            }
        }

        stage('Cleanup') {
            steps {
                sh 'docker-compose down'
            }
        }

        stage('Déployer l\'application') {
            steps {
                echo '🚀 Déploiement en cours...'
                // Utilisation de la commande artisan pour forcer la migration lors du déploiement
                sh 'docker-compose exec app php artisan migrate --force'
            }
        }
    }

    post {
        success {
            echo '🎉 Déploiement réussi !'
        }
        failure {
            echo '⚠ Erreur, vérifiez les logs Jenkins.'
        }
    }
}
