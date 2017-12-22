<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/12/18
 * Time: 22:37
 */
$installer = $this;
$installer->startSetup();
$installer->run(" 
	    ALTER TABLE `{$installer->getTable('helloworld/blogpost')}` 
	    CHANGE post post text not null; 
	");
$installer->endSetup();