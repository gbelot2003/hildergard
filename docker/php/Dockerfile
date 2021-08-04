FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
git \
tree \
nano \
vim \
wget \
libmagickwand-6.q16-dev \
libfreetype6-dev \
libjpeg62-turbo-dev \
libwebp-dev \
libpng-dev \
libzip-dev \
zip \
&& docker-php-ext-install zip \
&& ln -s /usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/MagickWand-config /usr/bin \
&& pecl install imagick \
&& echo "extension=imagick.so" > /usr/local/etc/php/conf.d/ext-imagick.ini \
&& rm -rf /var/lib/apt/lists/* 

# configure, install and enable all php packages
RUN set -eux; \
	docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp; \
	docker-php-ext-configure intl; \
	docker-php-ext-configure mysqli --with-mysqli=mysqlnd; \
	docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd; \
	docker-php-ext-configure zip; \
	docker-php-ext-install -j "$(nproc)" \
		gd \
		intl \
		mysqli \
		opcache \
		pdo_mysql \
		zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
#CMD composer self-update --2

USER root
# Set working directory
WORKDIR /var/www/html

COPY ./docker/php/php.ini /usr/local/etc/php/

# Add UID '1000' to www-data
RUN usermod -u 1000 www-data

RUN chown -R www-data:www-data /var/www

# Change current user to www
USER www-data


