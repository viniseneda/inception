all:
	cd srcs
	docker-compose build

run:
	cd srcs
	docker-compose up

fclean:
	docker system prune -a
	docker volume rm $(docker volume ls -q)

re:	fclean all

.PHONY:	all clean fclean
