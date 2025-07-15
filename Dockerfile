# Use the official PHP image with Apache
FROM php:8.2-apache

# Install the MySQLi extension for PHP
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# (Optional) Enable mod_rewrite for cleaner URLs, if needed
RUN a2enmod rewrite