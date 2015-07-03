<?php
class EbooksController extends AppController{
	public $uses=array('Literature','Ebook','SubLiterature','Level');
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('ebook_contribute');
	}
	public function ebook_contribute(){
		$this->layout="profile_layout";
		$sb=$this->SubLiterature->find('all');
		$sl=array();
		foreach ($sb as $key => $value) {
			$sl[$value['SubLiterature']['id']]=$value['Literature']['name']." - ".$value['SubLiterature']['name'];
		}
		$this->set('sl',$sl);
		$this->set('level',$this->Level->find('list',array('fields'=>array('id','level_name'))));

	}
}
?>
