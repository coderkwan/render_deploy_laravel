#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo

composer install
npm install
npm run build

php artisan migrate
