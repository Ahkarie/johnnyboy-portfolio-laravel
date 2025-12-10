FROM php:8.3-apache

# Enable URL rewriting and set document root to /public
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!Directory /var/www/!Directory ${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

# Copy app source
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Permissions for cache/logs
RUN chown -R www-data:www-data storage bootstrap/cache

# Make Apache listen on the PORT provided by the platform (Render sets $PORT)
CMD ["bash", "-lc", "sed -i \"s/^Listen .*/Listen ${PORT:-8080}/\" /etc/apache2/ports.conf && apache2-foreground"]

