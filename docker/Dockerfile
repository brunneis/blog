FROM php:7-apache
RUN a2enmod rewrite
ENV DOCKER true
ENV SITE_SCHEME https
ADD htdocs.tar /var/www/html
COPY entrypoint.sh /
ENTRYPOINT /entrypoint.sh
