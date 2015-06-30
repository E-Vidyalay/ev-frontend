<?php
class ContributorsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index','ebook_contribute','link_contribute');
	}
	public function index(){
		$this->layout='site_layout';
	}
}
?>
