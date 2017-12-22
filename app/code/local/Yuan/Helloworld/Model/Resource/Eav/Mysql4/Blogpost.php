<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/12/21
 * Time: 21:37
 */
class Yuan_Helloworld_Model_Resource_Eav_Mysql4_Blogpost extends Mage_Eav_Model_Entity_Abstract
{
    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('helloworld_eavblogpost');
        $this->setConnection(
            $resource->getConnection('helloworld-eav_read'),
            $resource->getConnection('helloworld-eav_write')
        );
    }
}