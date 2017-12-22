<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/9
 * Time: 0:07
 */
class Yuan_Helloworld_Model_Eavblogpost extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('helloworld-eav/blogpost');
    }
}