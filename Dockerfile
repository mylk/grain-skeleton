FROM ubuntu:latest

RUN apt-get update \
    && apt-get install php5 php5-mysql php5-curl -y \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

ADD . /grain-skeleton

RUN cd /grain-skeleton \
    && composer install --no-interaction