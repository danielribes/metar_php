default: composer

composer: 
	composer install

run:
	docker-compose up -d
	@PORT=$$(docker-compose port web 80 | cut -d: -f2); \
	echo "App running on: http://localhost:$$PORT/ 🚀"

stop:
	docker-compose down