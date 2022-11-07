pipeline {
  agent any
  stages {
    stage('Docker build and deploy') {
      steps {
        sh 'docker-compose up -d --build'
      }
    }
  }
}