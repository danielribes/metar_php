FROM php:8.2-apache

# Instal·lar extensions necessàries
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Activar mod_rewrite
RUN a2enmod rewrite

# Instal·lar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia el directori www a l'Apache
COPY . /var/www/html

# Configurar el DocumentRoot d'Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Exposa el port 80
EXPOSE 80

# Comanda per iniciar Apache
CMD ["apache2-foreground"]
