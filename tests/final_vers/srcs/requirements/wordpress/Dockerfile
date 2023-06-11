FROM alpine:3.16

RUN apk update && apk upgrade
RUN apk add php8 php8-cli php8-mbstring php8-fpm php8-curl php8-xml php8-json php8-gd php8-curl php8-opcache php8-mysqli
RUN mkdir -p /usr/share/nginx/www
COPY conf/www.conf /etc/php8/php-fpm.d/www.conf
RUN chown -R root:nobody /usr/share/nginx/www
# ENTRYPOINT ["chown -R root:nobody /usr/share/nginx/www"]
CMD ["php-fpm8","-F"]
# RUN apk add tar
