<?php
define('DEFAULT_CONTROLLER', 'HomeController');
define('PROOT', '/erp_sales/');
define('SITE_TITLE', 'ERP Sales');
define('DEFAULT_LAYOUT', 'default');

define('DB_HOST', 'us-cdbr-east-06.cleardb.net');
define('DB_NAME', 'ecom');
define('DB_USER', 'b3334ee80383ea');
define('DB_PASSWORD', 'c02318b4');
define('BASE_URL', "http" . ($_SERVER['HTTPS'] ? 's' : '') . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");

$path = str_replace("\\", "/", "http://" . $_SERVER['SERVER_NAME'] . __DIR__ . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);


define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));