FROM php:7.4-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    locales \
    bzip2 \
    cron \
    libcurl4-openssl-dev \
    libmcrypt-dev \
    unzip \
    nodejs \
    npm \
 && rm -rf /var/lib/apt/lists/*

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd curl gettext

# set recommended PHP.ini settings
# see https://secure.php.net/manual/en/opcache.installation.php
RUN { \
    echo 'opcache.memory_consumption=128'; \
    echo 'opcache.interned_strings_buffer=8'; \
    echo 'opcache.max_accelerated_files=4000'; \
    echo 'opcache.revalidate_freq=60'; \
    echo 'opcache.fast_shutdown=1'; \
    echo 'opcache.enable_cli=1'; \
} > /usr/local/etc/php/conf.d/opcache-recommended.ini

ENV BOXBILLING_VERSION 4.21
VOLUME /var/www/boxbilling

RUN mkdir -p /usr/src/boxbilling \
 && cd /usr/src/boxbilling \
 && curl -fsSL -o boxbilling.zip \
      "https://github.com/boxbilling/boxbilling/releases/download/${BOXBILLING_VERSION}/BoxBilling.zip" \
 && unzip boxbilling.zip \
 && rm boxbilling.zip

# Set the locale
RUN locale-gen en_US.UTF-8 en_us \
    && locale-gen C.UTF-8 \
    && locale-gen fr_FR.UTF-8 \
    && dpkg-reconfigure locales \
    && /usr/sbin/update-locale LANG=C.UTF-8
ENV LANG C.UTF-8
ENV LANGUAGE C.UTF-8
ENV LC_ALL C.UTF-8

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

USER $user
CMD ["php-fpm"]