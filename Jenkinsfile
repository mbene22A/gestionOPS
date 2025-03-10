pipeline {
    agent any

    stages {
        stage('Cloner le code') {
            steps {
                git branch: 'main', url: 'https://github.com/mbene22A/gestionOPS.git'
            }
        }
    }

    post {
        success {
            echo '🎉 Clonage réussi !'
        }
        failure {
            echo '⚠ Erreur lors du clonage, vérifiez les logs.'
        }
    }
}