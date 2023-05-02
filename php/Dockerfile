FROM php:8.0-fpm
ENV LANG ja_JP.UTF-8

ENV TZ Asia/Tokyo

RUN apt-get update && \
	apt-get install -y git unzip libzip-dev libicu-dev libonig-dev && \
	docker-php-ext-install intl pdo_mysql zip bcmath

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

# iniを設置
ADD ./php.ini /usr/local/etc/php/conf.d/php.ini

# add user
#RUN useradd -m -s /bin/sh -u 1000 nginx
RUN useradd -m -s /bin/bash nginx && \
echo "nginx:PIH429_sdg78" | chpasswd
RUN gpasswd -a nginx sudo

# 設定ファイルを指定の場所に置く
COPY ./conf /usr/local/etc/php-fpm.d/zzz-www.conf

# ユーザ変更
USER nginx

WORKDIR /var/www/html