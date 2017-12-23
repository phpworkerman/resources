<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/23 0023
 * Time: 17:02
 */
class Yuan_Helloworld_Model_Words
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('helloworld')->__('Hello')),
            array('value'=>2, 'label'=>Mage::helper('helloworld')->__('Goodbye')),
            array('value'=>3, 'label'=>Mage::helper('helloworld')->__('Yes')),
            array('value'=>4, 'label'=>Mage::helper('helloworld')->__('No')),
        );
    }
}
