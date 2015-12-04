<?php
namespace Db;

/**
 * @title Db工厂数据类
 * @description
 * Db工厂数据类
 * @author zhangchunsheng
 * @email zhangchunsheng423@gmail.com
 * @version V1.0
 * @date 2015-12-01 23:36
 */

class Factory {
    private static $_instances;

    static public function create($which = 'master') {
        $dbConfig = \Yaf\Registry::get('config')->db->$which;
        $_dbHost = $dbConfig->server;
        $_dbName = $dbConfig->database_name;

        $idx = md5($_dbHost . $_dbName);

        if (!isset(self::$_instances[$idx])) {
            self::$_instances[$idx] = new \medoo($dbConfig->toArray());
        }
        return self::$_instances[$idx];

    }
}