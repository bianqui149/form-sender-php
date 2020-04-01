# Base image
FROM php:7.2-apache
COPY ./src /var/www/html/
COPY --chown=www-data:www-data ./src/ /var/www/html/
EXPOSE 80