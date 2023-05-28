
FROM alpine:3.16

RUN apk update

RUN mkdir -p /run/nginx
RUN mkdir -p /usr/share/nginx/www
RUN apk add nginx
COPY nginx.conf /etc/nginx/nginx.conf
CMD ["nginx", "-g", "daemon off;"]
# RUN nginx -c /etc/nginx/nginx.conf

# RUN nginx -g 'pid /tmp/nginx.pid; daemon off;'
# RUN nginx -s reload
