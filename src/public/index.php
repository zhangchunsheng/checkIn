<?php
/**
 * @title index
 * @description
 * 入口文件
 * @author zhangchunsheng
 * @email zhangchunsheng423@gmail.com
 * @version V1.0
 * @date 2015-12-01 23:29
 */
date_default_timezone_set('Asia/Shanghai');

define("APPLICATION_PATH",  dirname(dirname(__FILE__)));
define('APP_PATH', dirname(__FILE__) . '/../');
define('DEBUG', 1);

if (file_exists(APP_PATH . '/conf/autoload.php')) {
    require_once APP_PATH . '/conf/autoload.php';
    spl_autoload_register('autoload');
}

$app  = new \Yaf\Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
->run();