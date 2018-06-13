apt-get update

apt-get install software-properties-common git vim curl language-pack-en -y

add-apt-repository -y ppa:ondrej/php
add-apt-repository -y ppa:chris-lea/redis-server
apt-get update

apt-get install -y apache2
a2enmod rewrite

apt-get install -y php7.1
apt-get install -y libapache2-mod-php7.1
apt-get install -y php7.1-curl
apt-get install -y php7.1-gd
apt-get install -y php7.1-mbstring
apt-get install -y php7.1-dom
apt-get install -y php7.1-zip
apt-get install -y openssl

apt-get install -y redis-server

apt-get install -y php7.1-pgsql
apt-get install -y postgresql postgresql-contrib
useradd rcf
sudo chpasswd << 'rcf'
rcf:rcf
rcf
echo "CREATE USER rcf WITH PASSWORD 'rcf';" | sudo -u postgres psql
echo "CREATE DATABASE rcf;" | sudo -u postgres psql
echo "GRANT ALL PRIVILEGES ON DATABASE rcf to rcf;" | sudo -u postgres psql

ln -fs /vagrant /var/www/rcf

rm /etc/apache2/sites-enabled/*
cp /vagrant/vagrant/virtualhost.conf /etc/apache2/sites-enabled/virtualhost.conf

service apache2 restart

apt-get clean

curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

cp /vagrant/vagrant/.env-vagrant /vagrant/.env

php artisan migrate --seed
