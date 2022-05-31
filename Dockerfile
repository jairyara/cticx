FROM php:8.1-apache-buster

ARG DEBIAN_FRONTEND=noninteractive

# Update
RUN apt-get -y update --fix-missing && \
    apt-get upgrade -y

# Install useful tools and install important libaries
RUN apt-get -y --no-install-recommends install --fix-missing \
    apt-utils \
    nano  \
    wget \
    dialog \
    libsqlite3-dev \
    libsqlite3-0 \
    default-mysql-client \
    zlib1g-dev \
    libzip-dev \
    libicu-dev  \
    apt-utils \
    build-essential \
    git \
    curl \
    libonig-dev  \
    libcurl4 \
    libcurl4-openssl-dev \
    zip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    openssl && \
    rm -rf /var/lib/apt/lists/* && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install xdebug
RUN pecl install xdebug && \
    docker-php-ext-enable xdebug

# Other PHP8 Extensions
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install curl
RUN docker-php-ext-install zip
RUN docker-php-ext-install intl
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install gettext
RUN docker-php-ext-install exif
RUN docker-php-ext-install gd
# RUN docker-php-ext-install tokenizer

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg

# Enable apache modules
RUN a2enmod rewrite headers

# Cleanup
RUN rm -rf /usr/src/*
