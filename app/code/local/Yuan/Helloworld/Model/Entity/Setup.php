<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/12/21
 * Time: 22:59
 */
class Yuan_Helloworld_Model_Entity_Setup extends Mage_Eav_Model_Entity_Setup {
    public function getDefaultEntities()
    {
        return array (
            'helloworld_eavblogpost' => array(
                'entity_model'      => 'helloworld-eav/eavblogpost',
                'attribute_model'   => '',
                'table'             => 'helloworld-eav/blogpost',
                'attributes'        => array(
                    'title' => array(
                        //the EAV attribute type, NOT a mysql varchar
                        'type'              => 'varchar',
                        'backend'           => '',
                        'frontend'          => '',
                        'label'             => 'Title',
                        'input'             => 'text',
                        'class'             => '',
                        'source'            => '',
                        // store scope == 0
                        // global scope == 1
                        // website scope == 2
                        'global'            => 0,
                        'visible'           => true,
                        'required'          => true,
                        'user_defined'      => true,
                        'default'           => '',
                        'searchable'        => false,
                        'filterable'        => false,
                        'comparable'        => false,
                        'visible_on_front'  => false,
                        'unique'            => false,
                    ),
                    'post' => array(
                        //the EAV attribute type, NOT a mysql varchar
                        'type'              => 'text',
                        'backend'           => '',
                        'frontend'          => '',
                        'label'             => 'Post',
                        'input'             => 'text',
                        'class'             => '',
                        'source'            => '',
                        // store scope == 0
                        // global scope == 1
                        // website scope == 2
                        'global'            => 0,
                        'visible'           => true,
                        'required'          => true,
                        'user_defined'      => true,
                        'default'           => '',
                        'searchable'        => false,
                        'filterable'        => false,
                        'comparable'        => false,
                        'visible_on_front'  => false,
                        'unique'            => false,
                    ),
                ),
            )
        );
    }
}