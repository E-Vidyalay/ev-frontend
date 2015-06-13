<?php
	class LiteraturesController extends AppController{
		public $uses=array('Literature','Ebook','SubLiterature');
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index');
		}
		public function index(){
			$date = new DateTime('15 days ago');
			$cdate=$date->format('Y-m-d');
			$lt=$this->Ebook->find('all',array('conditions'=>array('DATE(Ebook.updated_at) >'=>$cdate)));
			$this->set('latest',$lt);
			$this->layout='literature';
			$lt=$this->Literature->find('all');
			$this->set('lit',$lt);
			$slt=$this->SubLiterature->find('all');
			$this->set('slit',$slt);
			$this->set('books',$this->Ebook->find('all'));
		}
	}
?>