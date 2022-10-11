composer-i:
	docker-compose exec php-fpm composer install --working-dir=/var/www/laravel

npm-i:
	docker-compose exec php-fpm npm i --prefix /var/www/laravel

.PHONY: artisan
artisan:
	docker-compose exec php-fpm php ./laravel/artisan $(_)

composer:
	docker-compose exec php-fpm composer $(_) --working-dir=/var/www/laravel

container:
	docker-compose exec php-fpm $(_)
