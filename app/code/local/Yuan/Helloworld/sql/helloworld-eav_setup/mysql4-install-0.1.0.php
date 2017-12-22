<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/12/21
 * Time: 23:01
 */

$installer = $this;
$installer->installEntities();
$installer->addEntityType('helloworld_eavblogpost',Array(
    //entity_mode is the URL you'd pass into a Mage::getModel() call
    'entity_model'          =>'helloworld-eav/eavblogpost',
    //blank for now
    'attribute_model'       =>'',
    //table refers to the resource URI helloworld-eav/blogpost
    //<helloworld-eav_mysql4>…<blogpost><table>eavblog_posts</table>
    'table'         =>'helloworld-eav/blogpost',
    //blank for now, but can also be eav/entity_increment_numeric
    'increment_model'       =>'',
    //appears that this needs to be/can be above "1" if we're using eav/entity_increment_numeric
    'increment_per_store'   =>'0'
));
