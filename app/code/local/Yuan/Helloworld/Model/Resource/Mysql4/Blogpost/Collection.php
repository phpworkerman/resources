<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/12/10
 * Time: 23:14
 */
class Yuan_Helloworld_Model_Resource_Mysql4_Blogpost_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{
    protected function _construct()
    {
        $this->_init('helloworld/blogpost');
    }
}