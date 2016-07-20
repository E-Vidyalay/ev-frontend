<?php
	class InformationPostsController extends AppController{
		public $helpers = array('SocialShare.SocialShare');
		public $uses = array('InformationPost','InformationPostCounter','InformationComment','InformationReply');
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index','view_post');
		}
		public function index(){
			$date = new DateTime('15 days ago');
			$cdate=$date->format('Y-m-d');
			$info=$this->InformationPost->find('all',array('conditions'=>array('DATE(InformationPost.updated_at) >'=>$cdate),'order'=>array('InformationPost.updated_at'=>'desc')));
			$this->set('latest',$info);
			$this->layout='site_layout';
			$this->set('posts',$this->InformationPost->find('all',array('order'=>array('InformationPost.updated_at'=>'desc'))));
			
		}
		public function view_post($id=null){
			$this->InformationPostCounter->_constructDB($id);
			$this->layout='site_layout';
			$date = new DateTime('15 days ago');
			$cdate=$date->format('Y-m-d');
			$info=$this->InformationPost->find('all',array('conditions'=>array('DATE(InformationPost.updated_at) >'=>$cdate),'order'=>array('InformationPost.updated_at'=>'desc')));
			$this->set('latest',$info);
			$this->set('posts',$this->InformationPost->find('all',array('order'=>array('InformationPost.updated_at'=>'desc'))));
			$this->set('value',$this->InformationPost->findById($id));
			$this->set('comments',$this->InformationComment->find('all',array('conditions'=>array('post_id'=>$id))));
			$this->set('replies',$this->InformationReply->find('all'));
		}		
	}
?>