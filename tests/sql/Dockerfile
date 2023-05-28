FROM alpine:3.16

RUN apk update

RUN apk add mariadb && apk add openrc && apk add mariadb-client

# RUN adduser -D mysql && mkdir -p /etc/sudoers.d \
#         && echo "mysql ALL=(ALL) NOPASSWD: ALL" > /etc/sudoers.d/mysql \
#         && chmod 0440 /etc/sudoers.d/mysql

RUN rc-status -a && touch /run/openrc/softlevel

RUN /etc/init.d/mariadb setup

RUN mkdir /run/mysqld
 
RUN chmod 777 /run/mysqld

COPY mariadb-server.cnf /etc/my.cnf.d/mariadb-server.cnf

RUN rc-service mariadb start &&\
    mysql -u root -p1234 -e "CREATE DATABASE wordpress" &&\
    mysql -u root -p1234 -e "GRANT ALL ON wordpress.* TO 'vvarussa' IDENTIFIED BY '1234' WITH GRANT OPTION" &&\
    mysql -u root -p1234 -e "FLUSH PRIVILEGES"
    
#     mysql -u root -p1234 -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '1234'" 
# RUN mysql -u root -p1234 -e "CREATE DATABASE wordpress"

# RUN rc-service mariadb stop

USER mysql

CMD ["mysqld"]