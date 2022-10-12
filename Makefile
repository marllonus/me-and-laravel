composer-i:
	docker-compose exec php-fpm composer install --working-dir=/var/www/laravel

npm-i:
	docker-compose exec php-fpm npm i --prefix /var/www/laravel

npm-i-one:
	docker-compose exec php-fpm npm i $(_) --prefix /var/www/laravel

nrb:
	docker-compose exec php-fpm npm run build --prefix /var/www/laravel

nrd:
	docker-compose exec php-fpm npm run dev --prefix /var/www/laravel

.PHONY: artisan
artisan:
	docker-compose exec php-fpm php ./laravel/artisan $(_)

composer:
	docker-compose exec php-fpm composer $(_) --working-dir=/var/www/laravel

container:
	docker-compose exec php-fpm $(_)

pick-into:
	docker-compose exec php-fpm bash
