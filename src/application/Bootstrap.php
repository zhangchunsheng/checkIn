<?php
/**
 * @title Bootstrap
 * @description
 * Bootstrap 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * @author zhangchunsheng
 * @email zhangchunsheng423@gmail.com
 * @version V1.0
 * @date 2015-12-01 23:33
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {
    private $_config;

    public function _initConfig() {
        //把配置保存起来
        $this->_config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $this->_config);
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $userPlugin = new UserPlugin();
        $dispatcher->registerPlugin($userPlugin);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher) {
        //在这里注册自己的路由协议,默认使用简单路由
        //根据"/"对request_uri分段, 依次得到Module,Controller,Action
        Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
            "supervar",new Yaf_Route_Supervar("r")
        );
        //module controller action
        Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
            "simple", new Yaf_Route_simple('m', 'c', 'a')
        );
    }

    public function _initView(Yaf_Dispatcher $dispatcher) {
        Yaf_Registry::set('dispatcher', $dispatcher);
    }

    public function _initDb(Yaf_Dispatcher $dispatcher) {
        \Db\Factory::create();
    }

    public function _initSession($dispatcher) {
        //Yaf_Session::getInstance()->start();
    }
}