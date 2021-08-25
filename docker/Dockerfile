FROM wyveo/nginx-php-fpm:php74

RUN apt-get update && \
    apt-get install -y \
      php7.4-xdebug \
      net-tools \
      procps \
      curl

COPY xdebug.ini /etc/php/7.4/mods-available/xdebug.ini

EXPOSE 80