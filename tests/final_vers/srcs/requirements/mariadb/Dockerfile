FROM alpine:3.16

RUN apk update

RUN apk add mariadb && apk add openrc && apk add mariadb-client

RUN rc-status -a && touch /run/openrc/softlevel

RUN /etc/init.d/mariadb setup

RUN mkdir /run/mysqld

RUN chmod 777 /run/mysqld

COPY conf/mariadb-server.cnf /etc/my.cnf.d/mariadb-server.cnf

COPY conf/dump.sql /etc/my.cnf.d/dump.sql

COPY conf/entrypoint.sh /etc/my.cnf.d/
RUN chmod 777 /etc/my.cnf.d/entrypoint.sh

# RUN rc-service mariadb start &&\
#     mysql -u root -e "CREATE DATABASE wordpress" &&\
#     rc-service mariadb stop

# USER mysql

ENTRYPOINT ./etc/my.cnf.d/entrypoint.sh && exec mysqld --user=mysql
# CMD ["mysqld", "--user=mysql"]
