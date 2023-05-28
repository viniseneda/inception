FROM alpine:3.16

RUN apk update

RUN mkdir -p /run/nginx &&\
    mkdir -p /usr/share/nginx/www &&\
    apk add nginx

# RUN apk add wget &&\
#     apk add tar 

# RUN cd /usr/share/nginx/www &&\
#     tar -zxvf latest.tar.gz &&\
#     mv wordpress/* . &&\
#     rm -rf wordpress &&\


COPY nginx.conf /etc/nginx/nginx.conf
# CMD ["nginx", "-g", "daemon off;"]
# RUN nginx -c /etc/nginx/nginx.conf

# RUN nginx -g 'pid /tmp/nginx.pid; daemon off;'
# RUN nginx -s reload
