# restaurant

## add host
127.0.0.1 restaurant.private

## start server
cd [ROOT]
docker compose up

## migrate database
php artisan migrate

## import records
php artisan db:seed



url: http://restaurant.private