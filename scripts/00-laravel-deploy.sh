#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo

composer install

php artisan migrate
