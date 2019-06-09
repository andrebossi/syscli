#!/bin/sh

docker-compose exec app sh -c "php artisan clear-compiled && php artisan config:cache && php artisan optimize && php artisan key:generate && php artisan migrate --force"