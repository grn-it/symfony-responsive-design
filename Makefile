install:
	@docker-compose up -d
	@docker-compose exec symfony-web-application composer install
	@docker-compose exec symfony-web-application symfony console doctrine:migrations:migrate -n
	@docker-compose exec symfony-web-application symfony console app:fixtures:load -n
	@docker-compose exec symfony-web-application yarn
	@docker-compose exec symfony-web-application setfacl -dR -m u:$(shell id -u):rwX .
	@docker-compose exec symfony-web-application setfacl -R -m u:$(shell id -u):rwX .

up:
	@docker-compose up -d
	@docker-compose exec symfony-web-application yarn watch
	
down:
	@docker-compose down

fix-data-rights:
	@docker-compose exec symfony-web-application setfacl -R -m u:$(shell id -u):rwX docker/db/data

symfony:
	@docker-compose exec symfony-web-application bash
	
db:
	@docker-compose exec database bash
