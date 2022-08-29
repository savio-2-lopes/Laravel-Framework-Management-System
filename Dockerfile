FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get install git -y && apt-get install nano -y && apt-get upgrade -y 
WORKDIR /var/www/php
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chown -R www-data:www-data /var/www/php && chmod -R 777 /var/www/php/ 
RUN a2enmod rewrite