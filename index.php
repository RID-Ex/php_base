<?php
/**
 * User: Tsuguya Touma
 * Date: 15/01/14
 */

$base_dir = '/';

if($base_dir === '/') {
    define('BASE_PATH', realpath(str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['SCRIPT_FILENAME'])));
} else {
    define('BASE_PATH', realpath(str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['SCRIPT_FILENAME'])) . $base_dir);
}

define('VIEW_PATH', BASE_PATH . '/view');
define('SYS_PATH',  BASE_PATH . '/system');

require_once SYS_PATH . '/main.php';
