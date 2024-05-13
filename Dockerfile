FROM php:8.1-fpm-alpine

WORKDIR /var/www/html/public

COPY . /var/www/html
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# VOLUME /var/www/html/public

# EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]

#FROM evild/alpine-php:7.0.6
#
#RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
#RUN php composer-setup.php
#RUN php -r "unlink('composer-setup.php');"
#RUN mkdir -p /usr/local/bin
#RUN mv composer.phar /usr/local/bin/composer
