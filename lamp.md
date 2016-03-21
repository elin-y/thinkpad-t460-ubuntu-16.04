# Lamp Server

## MySQL
> sudo apt-get install mysql-server mysql-client

## Apache
> sudo apt-get install apache2
>
> sudo a2enmod rewrite

## PHP5
> sudo apt-get install php5 php5-mysql
>
> [/etc/php5/apache2/php.ini](etc/php5/apache2/php.ini)
>
> [/etc/php5/cli/php.ini](etc/php5/cli/php.ini)
>
> sudo service apache2 restart

## Adminer
> sudo apt-get install adminer
>
> sudo ln -s /etc/adminer/apache.conf /etc/apache2/conf-available/adminer
>
> sudo a2enconf adminer
>
> sudo service apache2 reload

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
