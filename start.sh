#!/bin/bash

docker-compose build
docker-compose up -d

composer install --ignore-platform-reqs
npm install && npm run prod

cp .env.example .env
docker exec -it group-actual php artisan key:generate

echo "merci de donner les droits suivants à l'utilisateur www-data pour l'ensemble du dossier, ou au moins pour les répertoires storage et bootstrap"
echo "sudo chown -R www-data:$USER"
echo "sudo chmod -R g+rw"
