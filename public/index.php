<?php

use App\Router;

require '../vendor/autoload.php';

//define('DEBUG_TIME', microtime(true));

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// function e (string $string) {
//     return htmlentities($string);
// }



$router = new Router(dirname(__DIR__) . '/views');
$router
    ->get('/', 'home/index', 'accueil')
    ->get('/formations', 'formations/index', 'formations')
    ->run();

