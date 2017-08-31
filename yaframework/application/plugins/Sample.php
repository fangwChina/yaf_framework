<?php
/**
 * @name SamplePlugin
 * @desc Yaf定义了如下的6个Hook,插件之间的执行顺序是先进先Call
 * @see http://www.php.net/manual/en/class.yaf-plugin-abstract.php
 * @author mysoft\fangw
 */
class SamplePlugin extends \Yaf\Plugin_Abstract {

	public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
		//echo 'routerStartup<br/>';

	}

	public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
		//echo 'routerShutdown<br/>';
	}

	public function dispatchLoopStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
		//echo 'dispatchLoopStartup<br/>';
	}

	public function preDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
		//echo 'preDispatch<br/>';
	}

	public function postDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
		//echo 'postDispatch<br/>';
	}

	public function dispatchLoopShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
		//echo 'dispatchLoopShutdown<br/>';
	}
}
