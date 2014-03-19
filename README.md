remote-virtual-host-linux
=========================

This software allows you to remotely control your server (add virtual hosts, edit, remove, etc.)
It is an university project.

# Installation #

## Install apache php mysql phpmyadmin ##

Actualy in this project mysql deosn't important, but however to make your server works well in future, you need to install mysql too.

### ubuntu 13.10 ###
```
$> sudo apt-get install apache2 php5 libapache2-mod-php5 mysql-server mysql-client php5-mysql phpmyadmin
```

to run server use this command:
```
$> sudo apache2ctl start
```
or
```
$> service apache2 start 
```
reboot:
```
$> sudo apache2ctl restart
```
or
```
$> service apache2 restart 
```
to stop server:
```
$> sudo apache2ctl stop
```
or
```
$> service apache2 stop 
```
	

## Configure apache, php ##

Now we need to enable following modules:
 * mod_rewrite
 * mod_proxy

To do this:
```
$> sudo a2enmod proxy
$> sudo a2enmod rewrite
```
For rewrite_mod we need to open file ```/etc/apache2/apache2.conf``` and change ```AllowOverride``` from ```None``` to ```All```.
Example:

```
<Directory />
	Options FollowSymLinks
	AllowOverride All
	Require all denied
</Directory>

<Directory /usr/share>
	AllowOverride All
	Require all granted
</Directory>

<Directory /var/www/>
	Options Indexes FollowSymLinks
	AllowOverride All
	Require all granted
</Directory>
```

### For more usability and PHP<5.4 ###


We need to check if we are using php short tags
```
$> cat /etc/php5/apache2/php.ini | grep -E "^short_|^display"
```
We will get:
```
short_open_tag = On
display_errors = On
display_startup_errors = On
```
If you see ```Off``` instead ```On``` then you need to change it in the file ```/etc/php5/apache2/php.ini``` to ```On```

## How to work with server ##

To start virtual host service:

```
$> cd /var/www/bin
$> sudo ./service.sh
```


