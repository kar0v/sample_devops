FROM php:7.0.33-apache

RUN apt-get update -y && apt-get install -y php7.0-json/oldoldstable php7.0-mysql/oldoldstable php7.0-readline/oldoldstable php7.0-opcache/oldoldstable php7.0-cli/oldoldstable php-mongodb/oldoldstable php-xdebug/oldoldstable libapache2-mod-php7.0 && docker-php-ext-install mysqli && docker-php-ext-install pdo
COPY ./mongodb.ini /usr/local/etc/php/conf.d/mongodb.ini 
#/usr/local/etc/php/conf.d/mongodb.ini 
#/usr/local/etc/php/php.ini

