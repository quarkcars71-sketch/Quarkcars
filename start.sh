#!/bin/bash

# Create storage directories
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/framework/cache
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/storage/app/public
mkdir -p /var/www/html/bootstrap/cache
mkdir -p /var/www/html/database

# Create SQLite database if not exists
touch /var/www/html/database/database.sqlite

# Set permissions
chown -R www-data:www-data /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache
chown -R www-data:www-data /var/www/html/database
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache
chmod 664 /var/www/html/database/database.sqlite

# Force clear all caches
rm -rf /var/www/html/storage/framework/views/*
php artisan view:clear
php artisan config:clear
php artisan cache:clear
php artisan route:clear

# Generate APP_KEY if not set
if [ -z "$APP_KEY" ]; then
    export APP_KEY=$(php artisan key:generate --show)
fi

# Run migrations
php artisan migrate --force

# Cache config for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache
apache2-foreground
