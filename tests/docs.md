sudo docker run -p 80:80 --rm -i --tty test:1.0

nginx -g daemon off

https://sagrawal003.medium.com/nginx-error-open-usr-local-var-run-nginx-pid-d04afe775b39

demorou um temp para decobrir que esse problema do pid eh pq precisava rodar o nginx primeiro

sudo docker run -p 80:80 -v $(pwd)/www:/usr/share/nginx/www --rm -i --tty test:4

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
