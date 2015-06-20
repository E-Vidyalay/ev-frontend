<?php
	class LiteraturePostsController extends AppController{

		var $uses = array('Literature','LiteraturePost','SubLiterature','Level','LiteratureComment','LiteratureReply');

		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index','get_post');
		}
		public function index(){
			$this->layout='literature';
			$lt=$this->Literature->find('all');
			$this->set('lit',$lt);
			$slt=$this->SubLiterature->find('all');
			$this->set('slit',$slt);
			$this->set('posts',$this->LiteraturePost->find('all'));
			$this->set('levels',$this->Level->find('all',array('order'=>array('Level.updated_at'=>'asc'))));
		}
		public function get_post($id=null){
			$this->layout='ajax';
			$this->set('value',$this->LiteraturePost->findById($id));
			$this->set('comments',$this->LiteratureComment->find('all',array('conditions'=>array('post_id'=>$id))));
			$this->set('replies',$this->LiteratureReply->find('all'));
		}
	}
?>