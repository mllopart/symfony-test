FROM alpine:3.4

MAINTAINER Marc Llopart "mllopart@the-fox-lab.com"

RUN apk add --update \
    php5-fpm \
    php5-apcu \
    php5-ctype \
    php5-curl \
    php5-dom \
    php5-gd \
    php5-iconv \
    php5-imagick \
    php5-json \
    php5-intl \
    php5-mcrypt \
    php5-mysql \
    php5-opcache \
    php5-openssl \
    php5-pdo \
    php5-pdo_mysql \
    php5-mysqli \
    php5-xml \
    php5-zlib \
    php5-phar \
    curl

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

COPY ./autotrader /var/www/symfony

WORKDIR /var/www/symfony

RUN composer clearcache
RUN composer install
RUN composer update

ADD ./compose/php/symfony.ini /etc/php5/fpm/conf.d/
ADD ./compose/php/symfony.ini /etc/php5/cli/conf.d/

ADD ./compose/php/symfony.pool.conf /etc/php5/fpm.d/

CMD ["php-fpm", "-F"]


EXPOSE 9000
