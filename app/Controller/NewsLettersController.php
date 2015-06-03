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
			$this->set('news',$this->NewsLetter->find('all'));
		}

		public function sharenews($id = NULL)
		{
				$this->layout='site_layout';
				$this->set('news',$this->NewsLetter->findById($id));

		}
	}
?>