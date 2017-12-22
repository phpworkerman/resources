<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/8
 * Time: 23:40
 */
class Yuan_Helloworld_BlogController extends Mage_Core_Controller_Front_Action {
    public function indexAction()
    {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('helloworld/blogpost');
        echo("Loading the blogpost with an ID of ".$params['id']."<br />");
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
    }
    public function createNewPostAction() {
        $blogpost = Mage::getModel('helloworld/blogpost');
        $blogpost->setTitle('ceshi');
        $blogpost->setPost('ceshi code');
        $blogpost->save();
        echo 'post created';
    }
    public function editFirstPostAction() {
        $blogpost = Mage::getModel('helloworld/blogpost');
        $blogpost->load(1);
        $blogpost->setTitle("The First post!");
        $blogpost->save();
        echo 'post edited';
    }
    public function deleteFirstPostAction() {
        $blogpost = Mage::getModel('helloworld/blogpost');
        $blogpost->load(1);
        $blogpost->delete();
        echo 'post removed';
    }
    public function showAllBlogPostsAction() {
        $posts = Mage::getModel('helloworld/blogpost')->getCollection();
        foreach($posts as $blog_post){
            echo '<h3>'.$blog_post->getTitle().'</h3>';
            echo nl2br($blog_post->getPost());
        }
    }
    public function eavReadAction(){
        $eavModel = Mage::getModel('helloworld-eav/eavblogpost');
	    $params = $this->getRequest()->getParams();
	    echo("Loading the blogpost with an ID of ".$params['id']."<br />");
	    $eavModel->load($params['id']);
	    $data = $eavModel->getData();
	    var_dump($data);
	}

}