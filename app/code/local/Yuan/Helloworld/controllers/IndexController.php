<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/8
 * Time: 22:19
 */
class Yuan_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $blogpost = Mage::getModel('helloworld/blogpost');
        echo get_class($blogpost);
    }
}