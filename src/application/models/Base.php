<?php
use Db\Factory;

/**
 * @title Model基类
 * @description
 * Model基类
 * @author zhangchunsheng
 * @email zhangchunsheng423@gmail.com
 * @version V1.0
 * @date 2015-12-01 23:36
 */

class BaseModel {
    protected $_db;

    function __construct() {
        $this->_db = Factory::create();
    }
}