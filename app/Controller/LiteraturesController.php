<?php
	class LiteraturesController extends AppController{
		public $uses=array('Literature','Ebook','SubLiterature');
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index','get_level_book','get_sublit_book','get_lit_book');
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
		public function get_level_book($lid=NULL){
			$this->layout="ajax";
			//pr($lid);die();
			if($lid=='undefined'){
				$this->set('books',$this->Ebook->find('all'));		
			}
			else{
			$this->set('books',$this->Ebook->find('all',array('conditions'=>array('level_id'=>$lid))));
			}
		}
		public function get_sublit_book($lid=NULL){
			$this->layout="ajax";
			//pr($lid);die();
			$this->set('books',$this->Ebook->find('all',array('conditions'=>array('sub_category_id'=>$lid))));
		}
		public function get_lit_book($sid=NULL){
			$this->layout="ajax";
			//pr($lid);die();
			$this->set('books',$this->Ebook->find('all',array('conditions'=>array('category_id'=>$sid))));
		}
	}
?>