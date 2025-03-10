pipeline {
    agent any

    environment {
        IMAGE_NAME = 'gestion_etablissement'
        CONTAINER_NAME = 'gestion_etablissement'
    }

    stages {
        stage('Cloner le repo') {
            steps {
                git 'https://github.com/mbene22A/gestionOPS.git'
            }
        }

        stage('Construire l’image Docker') {
            steps {
                script {
                    sh 'docker build -t $IMAGE_NAME .'
                }
            }
        }

        stage('Arrêter et supprimer l’ancien conteneur') {
            steps {
                script {
                    sh 'docker stop $CONTAINER_NAME || true && docker rm $CONTAINER_NAME || true'
                }
            }
        }

        stage('Démarrer le conteneur') {
            steps {
                script {
                    sh 'docker-compose up -d'
                }
            }
        }
    }
}
