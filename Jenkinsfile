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

        stage('Install Dependencies') {
            steps {
                sh 'docker-compose exec app composer install'
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
        stage('Installer PHP et Composer') {
            steps {
                sh 'php -v'
                sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Configurer l\'environnement') {
            steps {
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
                sh 'php artisan config:cache'
            }
        }

        stage('Exécuter les tests') {
            steps {
                sh 'php artisan test'
            }
        }

        stage('Déployer l\'application') {
            steps {
                echo '🚀 Déploiement en cours...'
                sh 'php artisan migrate --force'
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
