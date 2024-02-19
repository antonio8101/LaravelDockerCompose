# Utilizza un'immagine di base con PHP e Apache
FROM php:8.2-apache

# Imposta la directory di lavoro
WORKDIR /var/www/html

# Installa le dipendenze PHP necessarie
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip && \
    docker-php-ext-install zip && \
    docker-php-ext-install pdo_mysql && \
    curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer && \
    a2enmod rewrite

# Copia il file di configurazione del virtual host di Apache
COPY laravel.conf /etc/apache2/sites-available/000-default.conf

# Abilita il modulo di riscrittura di Apache
RUN a2enmod rewrite

# Imposta le variabili d'ambiente per l'applicazione Laravel
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
ENV APACHE_LOG_DIR=/var/log/apache2

# Abilita il modulo di riscrittura di Apache
RUN a2enmod rewrite

# Esponi la porta 80 per l'accesso all'applicazione
EXPOSE 80

# Copy Apache configuration file
# COPY apache2.conf /etc/apache2/apache2.conf

# Set user to www-data
# USER www-data

# Avvia il server Apache
CMD ["apache2-foreground"]
