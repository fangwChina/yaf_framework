<?php
require_once dirname(__FILE__) . '/library/Smarty/Autoloader.php';
require_once dirname(__FILE__) . '/library/Smarty/Smart_Adapter.php';

/**
 * @name Bootstrap
 * @author mysoft\fangw
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends \Yaf\Bootstrap_Abstract
{

    public function _initConfig()
    {
        //把配置保存起来
        $arrConfig = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('config', $arrConfig);
    }

    public function _initPlugin(\Yaf\Dispatcher $dispatcher)
    {
        //注册一个插件
        $objSamplePlugin = new SamplePlugin();
        $dispatcher->registerPlugin($objSamplePlugin);
    }

    public function _initSmarty(\Yaf\Dispatcher $dispatcher)
    {
        //注册smarty引擎
        Smarty_Autoloader::register();
        $smarty = new Smart_Adapter(null,\Yaf\Application::app()->getConfig()->smarty);
        $dispatcher->setView($smarty);
    }

    public function  _initDefaultName(\Yaf\Dispatcher $dispatcher)
    {
        //配置默认路由[setDefaultModule 不生效]
        //$dispatcher->setDefaultModule("Api")->setDefaultController("Passport")->setDefaultAction("longin");
    }

    public function _initRoute(\Yaf\Dispatcher $dispatcher)
    {
        //在这里注册自己的路由协议,默认使用简单路由
    }

    public function _initView(\Yaf\Dispatcher $dispatcher)
    {
        //在这里注册自己的view控制器，例如smarty,firekylin
    }
}
