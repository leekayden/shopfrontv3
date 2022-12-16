<?php
// APPLICATION
define('APPLICATION', 'Admin');

// HTTP
define('HTTP_SERVER', 'https://shop.cloudservetechcentral.com/sf-admin/');
define('HTTP_CATALOG', 'https://shop.cloudservetechcentral.com/');

// DIR
define('DIR_OPENCART', '/var/www/vhosts/cloudservetechcentral.com/shopfrontv3/');
define('DIR_APPLICATION', DIR_OPENCART . 'sf-admin/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_CATALOG', DIR_OPENCART . 'catalog/');
define('DIR_STORAGE', '/var/www/vhosts/cloudservetechcentral.com/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'shopfrontv3');
define('DB_PASSWORD', 'C18bp~4q3');
define('DB_DATABASE', 'shopfrontv3');
define('DB_PORT', '3306');
define('DB_PREFIX', 'sf_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
