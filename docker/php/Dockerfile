FROM php:8.2-fpm-bookworm

# --------------------------------------------------
# System dependencies (stable Debian Bookworm)
# --------------------------------------------------
RUN rm -rf /var/lib/apt/lists/* \
    && apt-get update -o Acquire::Retries=3 \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libxml2-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libzip-dev \
        zlib1g-dev \
        libicu-dev \
        libexif-dev \
        default-mysql-client \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# --------------------------------------------------
# PHP extensions (KEY PART FROM OFFICIAL IMAGE)
# --------------------------------------------------
RUN docker-php-ext-configure gd \
        --with-libdir=/usr/include/ \
        --with-jpeg \
        --with-freetype \
    && docker-php-ext-install -j$(nproc) \
        gd \
        exif \
        intl \
        pdo \
        pdo_mysql \
        zip \
        opcache
# --------------------------------------------------
# PHP configuration
# --------------------------------------------------
COPY php/php.ini /usr/local/etc/php/conf.d/zz-custom.ini

# --------------------------------------------------
# Composer
# --------------------------------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# --------------------------------------------------
# Working directory
# --------------------------------------------------
WORKDIR /var/www/html
