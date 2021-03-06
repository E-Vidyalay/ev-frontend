<?php
	class NewsLettersController extends AppController{
		public $helpers = array('SocialShare.SocialShare');
		public $uses=array('User','NewsLetter','Admin');
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index','sharenews');
		}
		public function index(){
			$this->layout='site_layout';
			$this->set('news',$this->NewsLetter->find('all',array('order'=>array('NewsLetter.date'=>'desc'))));
		}

		public function sharenews($id = NULL)
		{
			$this->layout='site_layout';
			if($id==NULL){
				$this->set('news',NULL);
			}
			else{
				//pr($this->NewsLetter->findById($id));die();
				$this->set('news',$this->NewsLetter->findById($id));
			}

		}
	}
?>