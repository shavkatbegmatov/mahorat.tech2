<?php

use fw\core\Router;

$query = rtrim($_SERVER['QUERY_STRING'], '/');

define("DEBUG", 1);
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/fw/core');
define('ROOT', dirname(__DIR__));
define('LIBS', dirname(__DIR__) . '/vendor/fw/libs');
define('APP', dirname(__DIR__) . '/app');
define('CACHE', dirname(__DIR__) . '/tmp/cache');
define('LAYOUT', 'nova_th');
define('ADMIN', 'http://ronny.com/control');
define('ROOT_URL', 'http://ronny.com');

require '../vendor/fw/libs/functions.php';
require __DIR__ . '/../vendor/autoload.php';

new \fw\core\App;

Router::add('^product/v/(?P<alias>[a-z-0-9_]+)$', ['controller' => 'Product', 'action' => 'v']);

// defaults routs
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');


Router::dispatch($query);