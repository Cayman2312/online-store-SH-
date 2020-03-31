<?php
/**
 * 
 * Подлючение основных конфигурационных файлов
 * 
 */

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);

session_start();

include(ROOT_PATH.'/parts/functions.php');
include(ROOT_PATH.'/conf/db.php');

?>