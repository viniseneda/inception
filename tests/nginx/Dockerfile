
FROM alpine:3.16

RUN apk update

RUN mkdir -p /run/nginx &&\
    mkdir -p /usr/share/nginx/www &&\
    apk add nginx

RUN apk add wget &&\
    apk add tar

RUN cd /usr/share/nginx/www &&\
    wget https://wordpress.org/latest.tar.gz &&\
    tar -zxvf latest.tar.gz &&\
    mv wordpress/* . &&\
    rm -rf wordpress 

COPY nginx.conf /etc/nginx/nginx.conf
COPY wp-config.php /usr/share/nginx/www/wp-config.php 
CMD ["nginx", "-g", "daemon off;"]
# RUN nginx -c /etc/nginx/nginx.conf

# RUN nginx -g 'pid /tmp/nginx.pid; daemon off;'
# RUN nginx -s reload
