
build:
	composer install
	composer update
	cp .env.example .env
	php artisan config:clear
	php artisan cache:clear
	php artisan key:generate

install:build
