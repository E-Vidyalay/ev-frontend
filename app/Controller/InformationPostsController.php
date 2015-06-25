<?php
	class InformationPostsController extends AppController{

		var $uses = array('InformationPost','InformationComment','InformationReply');

		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index','view_post');
		}
		public function index(){
			$date = new DateTime('15 days ago');
			$cdate=$date->format('Y-m-d');
			$info=$this->InformationPost->find('all',array('conditions'=>array('DATE(InformationPost.updated_at) >'=>$cdate)));
			$this->set('latest',$info);
			$this->layout='Literature';
			
			$this->set('posts',$this->InformationPost->find('all'));
			
		}
		public function view_post($id=null){
			$this->layout='ajax';
			$this->set('value',$this->InformationPost->findById($id));
			$this->set('comments',$this->InformationComment->find('all',array('conditions'=>array('post_id'=>$id))));
			$this->set('replies',$this->InformationReply->find('all'));
		}
		
		
	}
?>