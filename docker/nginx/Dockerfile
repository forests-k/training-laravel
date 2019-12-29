FROM nginx:latest

ADD ./server.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www

RUN apt-get update && \
    apt-get install -y vim && \
    apt-get install -y curl