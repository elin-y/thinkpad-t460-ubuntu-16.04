# Lamp Server

## MySQL
> sudo apt-get install mysql-server mysql-client

## Apache
> sudo apt-get install apache2
>
> sudo a2enmod rewrite

## PHP5
> sudo apt-get install php5 php5-mysql php5-imagick php5-gd php5-curl php5-imap php5-mcrypt php5-xhprof
>
> [/etc/php5/apache2/php.ini](etc/php5/apache2/php.ini)
>
> [/etc/php5/cli/php.ini](etc/php5/cli/php.ini)
>
> sudo systemctl restart apache2

### XDebug
- [Download](https://xdebug.org/download.php) XDebug source, since php5-xdebug won't install (at the time of writing).
- Install dependencies:

> sudo apt-get install php5-dev
>
> sudo update-alternatives --set php /usr/bin/php5

Fix a bug in the packages:
> cd /usr/lib/php5/build
>
> sudo rm ltmain.sh
>
> sudo ln -s ../../../share/libtool/config/ltmain.sh .

- Follow the instructions for [installation from source](https://xdebug.org/docs/install#source):
> cd /path/to/xdebug
>
> phpize5
>
> ./configure --enable-xdebug
>
> make
>
> sudo make install
>

- Configure XDdebug:
> [/etc/php5/mods-available/xdebug.ini](etc/php5/mods-available/xdebug.ini)

> sudo systemctl restart apache2

## Postfix
> sudo apt-get install postfix

- Select **Local only** for general mail configuration
- Leave system mail name as the name of your computer

## Adminer
> sudo apt-get install adminer
>
> sudo ln -s /etc/adminer/apache.conf /etc/apache2/conf-available/adminer
>
> sudo a2enconf adminer
>
> sudo systemctl reload apache2

## Composer
> php -r "readfile('https://getcomposer.org/installer');" > composer-setup.php
>
> php -r "if (hash('SHA384', file_get_contents('composer-setup.php')) === '41e71d86b40f28e771d4bb662b997f79625196afcca95a5abf44391188c695c6c1456e16154c75a211d238cc3bc5cb47') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
>
> php composer-setup.php
>
> php -r "unlink('composer-setup.php');"
>
> sudo mv composer.phar /usr/local/bin/composer

Add the following to the [.bashrc](home/user/.bashrc) file:
> export PATH="$HOME/.composer/vendor/bin:$PATH"
