FROM php:7.2-apache
RUN docker-php-ext-install mysqli
COPY html/ /var/www/html/
ENV PORT 80
ENTRYPOINT []
CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground