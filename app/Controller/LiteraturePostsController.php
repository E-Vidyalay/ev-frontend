<?php
	class LiteraturePostsController extends AppController{

		var $uses = array('Literature','LiteraturePost','SubLiterature','Level','LiteratureComment','LiteratureReply');

		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index','get_post','get_lit_post','get_sublit_post','get_level_post');
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
		public function get_lit_post($id=null){
			$this->layout="ajax";
			$this->set('values',$this->LiteraturePost->find('all',array('conditions'=>array('LiteraturePost.literature_id'=>$id))));

		}
		public function get_sublit_post($id=null){
			$this->layout="ajax";
			$this->set('values',$this->LiteraturePost->find('all',array('conditions'=>array('LiteraturePost.sub_literature_id'=>$id))));
		}
		public function get_level_post($id=null){
			$this->layout="ajax";
			$this->set('values',$this->LiteraturePost->find('all',array('conditions'=>array('LiteraturePost.level_id'=>$id))));
		}
	}
?>