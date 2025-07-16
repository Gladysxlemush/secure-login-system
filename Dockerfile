FROM php:8.2-apache

# Install mysqli extension and enable it
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy website files from ./src to Apache's web root
COPY ./src/ /var/www/html/

