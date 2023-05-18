<?php

define("DEBUG", 1); // 1 - режим разработки (видно все ошибки), 0 - режим продакшена (нет ошибок)
define("ROOT", dirname(__DIR__)); //корень сайта (C:\xampp\htdocs\ishop) 
define("WWW", ROOT . '/public'); // папка public
define("APP", ROOT . '/app'); // папка app
define("CORE", ROOT . '/vendor/ishop/core'); // папка core
define("LIBS", ROOT . '/vendor/ishop/core/libs'); // папка libs
define("CACHE", ROOT . '/tmp/cache'); // папка cache
define("CONF", ROOT . '/config'); // папка config
define("LAYOUT", 'default'); // шаблон сайта по-умолчанию

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}"; // http://localhost/ishop/public/index.php
$app_path = preg_replace("#[^/]+$#", '', $app_path); // http://localhost/ishop/public/
$app_path = str_replace('/public/', '', $app_path); // http://localhost/ishop
define("PATH", $app_path); // URL главной страницы
define("ADMIN", PATH . '/admin'); // путь к админки

require_once ROOT . '/vendor/autoload.php';