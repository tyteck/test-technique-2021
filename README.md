## Un tests technique qui m'a été soumis en avril 2021

### Introduction

Ceci est ma proposition de solution pour la validation du test technique soumis par Steven Van Poeck.

Temps de réalisation : à peu près 4h (avec la doc)

Le service utilise :
- Docker 🐳
- Laravel 8
- PHP 8 🐘
- TailwindCss
- NPM (nodejs)
- sqlite 

### Installation

Dans un souci de simplicité, mon docker-compose bind le port 8088 de la machine hote sur le port 80 du container. Si un autre service est deja bindé sur ce port ... ce sera une fatal error 👾.


```
git clone git@github.com:tyteck/test-technique-2021.git tyteca-test

cd tyteca-test

./start.sh
```
Ouvrez votre navigateur sur `http://localhost:8088`.
