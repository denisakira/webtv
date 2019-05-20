FROM nginx:1.12

ADD ./docker/vhost.conf /etc/nginx/conf.d/default.conf
