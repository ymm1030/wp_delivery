sudo apt-get update
sudo apt-get upgrade
sudo apt-get install vim nginx mysql-server php-fpm php-mysql
sudo mv -f wordpress_default /etc/nginx/sites-available/default
wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
mysql -uroot -pymm wordpress.sql
mv -f wp-config.php wordpress/wp-config.php
cp -r wordpress/* /var/www/html
sudo chown -R www-data:www-data /var/www/html
sudo systemctl restart nginx
echo AllDone!Please visit your domain/ip to install it!