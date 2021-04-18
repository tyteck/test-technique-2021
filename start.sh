#!/bin/bash

docker-compose build
docker-compose up -d

composer install --ignore-platform-reqs
npm install && npm run prod

cp .env.example .env
docker exec -it group-actual php artisan key:generate

echo "---------------------------------------------------"
echo " "
echo "Merci de permettre à www-data de pouvoir écrire 📝 sur bootstrap et storage"
echo 'sudo chown -R www-data:$USER storage bootstrap'
echo 'sudo chmod -R g+rw storage bootstrap'
echo " "
echo "---------------------------------------------------"

echo "une fois que tout ca est ok vous pouvez ouvrir votre navigateur sur http://localhost:8088"
