<?php
/**
 * Created by PhpStorm.
 * User: lixiaoyun
 * Date: 29/03/2017
 * Time: 10:55 AM
 */

define('BASE_PATH', __DIR__);
require BASE_PATH.'/vendor/autoload.php';
require BASE_PATH.'/config/model.php';

if(!defined('IS_DEBUG') || IS_DEBUG) {
    $whoops = new \Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}


require BASE_PATH.'/config/router.php';