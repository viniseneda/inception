#!/bin/sh
rc-service mariadb start
mysql -u root -e "CREATE DATABASE wordpress"
mysql -u root -e "GRANT ALL ON wordpress.* TO '$MYSQL_USER' IDENTIFIED BY '$MYSQL_PASSWORD' WITH GRANT OPTION"
mysql -u root -e "FLUSH PRIVILEGES"
mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD'"
rc-service mariadb stop
