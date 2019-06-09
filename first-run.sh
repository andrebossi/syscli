#!/bin/sh

docker-compose exec app sh -c "php artisan config:clear && php artisan clear-compiled && php artisan optimize && php artisan migrate --force --seed"