#!/bin/sh

cd "/app" || exit 0

if [ -d "/app/vendor" ];
then
    php artisan cache:clear
fi

composer install
php artisan migrate
tail -f /dev/null
