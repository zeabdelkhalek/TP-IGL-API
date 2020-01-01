#!/bin/sh
php artisan key:generate
php artisan config:cache
php artisan storage:link
# check if the database is ready
# echo "Waiting for Mysql DB"
# while ! mysql --protocol TCP -u"phpmyadmin" -p"phpmyadmin" -h"mysql_database" -e "show databases;" > /dev/null 2>&1;
# do
#   echo -n "."
#   sleep 1
# done
php artisan migrate
php artisan db:seed
php-fpm