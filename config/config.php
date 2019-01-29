<?php


if ($_SERVER['SERVER_PORT'] == 443 OR $_SERVER['HTTPS'] == 'on')
    $protocol = 'https://';
else
    $protocol = 'http://';


define('SITE', $protocol.$_SERVER['HTTP_HOST'].'/');
define('SITEPATH', $_SERVER['DOCUMENT_ROOT'].'/');
define('APPPATH', SITEPATH.'app/');
define('VIEWPATH', SITEPATH.'app/');
define('URI', $_SERVER['REQUEST_URI'].'/');

if (SITE == 'webapps.dv') {
    ini_set('display_errors','on');
    error_reporting(E_ALL);
}
