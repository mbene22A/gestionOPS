pipeline {
    agent any

    environment {
        PHP_VERSION = '8.2'
        APP_DIR = 'gestionOPS'
    }

    stages {
        stage('Cloner le code') {
            steps {
                git branch: 'main', url: 'https://github.com/mbene22A/gestionOPS.git'
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
