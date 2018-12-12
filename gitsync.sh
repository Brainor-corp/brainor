#!/bin/sh
echo "Change work directory"
cd /var/www/www-root/data/www/test1.brainor.ru/
echo "Update working files"
git pull origin master
echo "Change files owner"
chown -R nginx:nginx /var/www/www-root/data/www/test1.brainor.ru/app
chown -R nginx:nginx /var/www/www-root/data/www/test1.brainor.ru/config
chown -R nginx:nginx /var/www/www-root/data/www/test1.brainor.ru/database
chown -R nginx:nginx /var/www/www-root/data/www/test1.brainor.ru/resources
chown -R nginx:nginx /var/www/www-root/data/www/test1.brainor.ru/routes
chown -R nginx:nginx /var/www/www-root/data/www/test1.brainor.ru/storage
echo "Cache clear"
php artisan cache:clear
echo "Compiled views clear"
php artisan view:clear
echo "Route cache clear"
php artisan route:clear
echo "Config cache clear"
php artisan config:clear
