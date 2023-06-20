<?php

Error_Reporting(E_ALL & ~E_NOTICE); //не выводить предупреждения
ini_set('display_errors', 1);

error_reporting(E_ALL);
ini_set('error_log', __DIR__ . '/logs/php-errors.log');

define('HOST', 'localhost'); 		//сервер
define('USER', 'root'); 			//пользователь
define('PASSWORD', ''); 			//пароль
define('NAME_DB', 'biblio-aparte');		//база


define('IMAGEDIR', 'E:/OpenServer/domains/biblio-aparte/images/'); //папка с изображениями

require_once 'application/bootstrap.php';
