PHONY: install dev build build-no-cache down stop workspace

CONTAINER_NAME=frankenphp-container

dev:
	@docker-compose up -d --build

migrate:
	@docker exec -it ${CONTAINER_NAME} php artisan migrate

down:
	@docker-compose down

workspace:
	@docker exec -it ${CONTAINER_NAME} bash
