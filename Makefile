default: composer

composer: 
	composer install

run:
	docker-compose up -d
	@PORT=$$(docker-compose port web 80 | cut -d: -f2); \
	echo "App running on: http://localhost:$$PORT/ 🚀"; \
	echo "Example: Call with http://localhost:$$PORT/lell to get the METAR of Sabadell Airport."

stop:
	docker-compose down