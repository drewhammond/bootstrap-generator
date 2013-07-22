<?php
require('lib/php-template/src/Template.php');
require('lib/torophp/src/Toro.php');

require('handlers/AbstractHandler.php');
require('handlers/HomeHandler.php');
require('handlers/GenerateHandler.php');

ToroHook::add('404', function() {
    header('HTTP/1.0 Not Found');
    die('Not found.');
});

Toro::serve(array(
    '/' => 'HomeHandler',
    '/themes' => 'ThemesHandler',
    '/themes/generate' => 'GenerateHandler',
    '/themes/:number/download' => 'DownloadHandler',
    '/themes/:number/preview' => 'PreviewHandler'
));