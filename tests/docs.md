sudo docker run -p 80:80 --rm -i --tty test:1.0

nginx -g daemon off

https://sagrawal003.medium.com/nginx-error-open-usr-local-var-run-nginx-pid-d04afe775b39

demorou um temp para decobrir que esse problema do pid eh pq precisava rodar o nginx primeiro

sudo docker run -p 80:80 -v $(pwd)/www:/usr/share/nginx/www --rm -i --tty test:4

docker run -p 3306:3306 -v --rm -i --tty test

Delete all volumes using the following command: docker volume rm $(docker volume ls -q)

docker system prune -a


GRANT ALL ON wordpress_db.* TO 'vvarussa'@'localhost' IDENTIFIED BY '1234' WITH GRANT OPTION;

rc-service mariadb start

ALTER USER 'root'@'localhost' IDENTIFIED BY '1234';

export MYSQL_ROOT_PASSWORD=1234

/etc/init.d/mariadb setup

"ALTER USER 'root'@'localhost' IDENTIFIED BY '1234'";

-------
## links uteis e suas contribuições

### instalando php e debugando

https://serverfault.com/questions/744124/file-issue-with-nginx-php-fpm-on-separate-servers
(quando descobrir que o server php tinha que ter acesso aos scripts php tbm)

https://www.php.net/manual/en/tutorial.firstpage.php
(infos para testar se o server php está funcionando)

https://docs.docker.com/compose/compose-file/03-compose-file/
(documentação oficial sobre o docker-compose)

instalando php-fpm no alpine
https://www.librebyte.net/en/systems-deployment/how-to-install-php-php-fpm-in-alpine-linux/

https://stackoverflow.com/questions/44706951/nginx-to-serve-php-files-from-a-different-server
(configuração do nginx para usar server em outro computador)

### nginx

https://stackoverflow.com/questions/33724125/custom-nginx-container-exits-immediately-when-part-of-docker-compose
(o comando para fazer o nginx rodar no foreground)

https://www.cyberciti.biz/faq/how-to-install-nginx-web-server-on-alpine-linux/

https://github.com/NginxProxyManager/nginx-proxy-manager/issues/398
(erro que precisas adicionar um usuário)

http://nginx.org/en/docs/beginners_guide.html#control
(doc oficial do nginx)

https://stackoverflow.com/questions/38984509/css-was-not-loaded-because-its-mime-type
(aparentemente como corrigir o mime do css)

### alpine

https://www.shellhacks.com/alpine-install-package/

### SQL
https://security.stackexchange.com/questions/72823/mysql-root-password-stored-in-my-cnf
(possibilidade de colocar a senha do ROOT nos arquivos de conf do php)

https://www.digitalocean.com/community/tutorials/how-to-reset-your-mysql-or-mariadb-root-password
(comando para mudar a senha do root)

https://mariadb.com/kb/en/creating-a-custom-docker-image/

https://www.linuxshelltips.com/install-mariadb-alpine-linux/
https://www.librebyte.net/en/data-base/how-to-install-mariadb-on-alpine-linux/

## 28 de maio
Não consige escrever o arquivo wp_config.hpp

encontrar uma forma de debugar o erro

ideias de solução:
https://stackoverflow.com/questions/20203379/linux-wordpress-cant-not-write-wp-config-file

Entender mais também sobre linux, permissões e grupos.