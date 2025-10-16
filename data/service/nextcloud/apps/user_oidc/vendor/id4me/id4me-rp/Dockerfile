# Dockerfile
FROM php:7.0

RUN apt-get update && apt-get install -qqy git wget unzip && apt-get autoclean
RUN pecl install xdebug-2.7.2 && docker-php-ext-enable xdebug

RUN EXPECTED_CHECKSUM="$(wget -q -O - https://composer.github.io/installer.sig)" && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    ACTUAL_CHECKSUM="$(php -r "echo hash_file('sha384', 'composer-setup.php');")" && \
    \
    if [ "$EXPECTED_CHECKSUM" != "$ACTUAL_CHECKSUM" ]; \
    then \
        >&2 echo 'ERROR: Invalid installer checksum'; \
        rm composer-setup.php; \
        exit 1; \
    fi && \
    \
    php composer-setup.php --quiet && \
    RESULT=$? && \
    rm composer-setup.php && \
    exit $RESULT

WORKDIR /var/id4me-rp-client-php

CMD ["php", "composer.phar",  "install"]

