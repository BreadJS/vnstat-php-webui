# vnstat-php-webui
This is a PHP frontend for vnstat, a network traffic logger. Since vnstat is console mode only I created this frontend to make a 'nice' report of the data collected by vnstat.

## Installation
1. Install `vnstat` and `vnstati`
```
sudo apt install vnstat vnstati
```
2. Install `apache2` and `php8.0`
```
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php8.0 libapache2-mod-php8.0
```
3. Copy all the files into the `/var/www/html` folder or your prefered folder
4. Give the `img` directory permissions for php to save the images
```
sudo chmod 777 /var/www/html/img
```
5. Edit the `index.php` file and change the `directory`, `interface` or `rateunit`

That's it, you're done!

## Preview

![](https://github.com/OfficialDevvCat/vnstat-php-webui/blob/main/screenshot.png)