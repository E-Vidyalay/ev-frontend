<?php
	class LiteraturesController extends AppController{
		public $uses=array('Literature','Ebook','SubLiterature');
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index');
		}
		public function index(){
			$this->layout='literature';
		}
	}
?>