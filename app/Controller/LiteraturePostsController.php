<?php
	class LiteraturePostsController extends AppController{

		var $uses = array('Literature','LiteraturePost','SubLiterature','Level');

		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index');
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
	}
?>