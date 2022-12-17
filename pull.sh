#!/usr/bin/env bash

set -e

. ~/.bashrc

git pull origin main

php artisan optimize
php artisan view:cache

npm run build