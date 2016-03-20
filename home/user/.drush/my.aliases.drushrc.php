<?php
$aliases['loc'] = array(
  'root' => '/home/user/Projects/mysite/htdocs',
  'uri' => 'mysite.local',
  'path-aliases' => array(
    '%dump-dir' => '/home/user/drush/dumps/mysite.local',
  ),
);
$aliases['prod'] = array(
  'root' => '/var/www/vhosts/mysite.example.com/htdocs',
  'uri' => 'http://mysite.example.com',
  'remote-host' => 'demint.de',
  'remote-user' => 'www-data',
  'path-aliases' => array(
    '%dump-dir' => '/var/www/drush-dumps/mysite.example.com',
  ),
);
