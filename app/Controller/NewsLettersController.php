<?php
	class NewsLettersController extends AppController{
		public $uses=array('User','NewsLetter','Admin');
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index');
		}
		public function index(){
			$this->layout='site_layout';
			$this->set('news',$this->NewsLetter->find('all'));
		}
	}
?>