<?php
/**
 * @name IndexController
 * @author mysoft\fangw
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf_Controller_Abstract
{

    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/Sample/index/index/index/name/mysoft\fangw 的时候, 你就会发现不同
     */
    public function indexAction($name = "Stranger")
    {

        //1. fetch query
        $get = $this->getRequest()->getQuery("get", "default value");

        //2. fetch model
        $model = new SampleModel();

        //3. assign
        $this->getView()->assign("content", $model->selectSample());
        $this->getView()->assign("name", $name);

        //4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return true;
    }

    public function testAction()
    {
        echo json_encode(Yaf_Application::app()->getConfig());
        echo ini_get('yaf.environ');
        $db =Mysql::getInstance();

        $row = $db->fetchAll('select * from `p_user`');

        print_r($row);die;
        //2. fetch model
        $model = new SampleModel();

        //3. assign
        $this->getView()->assign("content", $model->selectSample());
        $this->getView()->assign('name', 'aasdfasdfa');
        echo $this->getView()->render("/index/index.phtml");
        return false;

    }
}
