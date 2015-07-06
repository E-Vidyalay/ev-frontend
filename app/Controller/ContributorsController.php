<?php
class ContributorsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();

	}
	public function index(){
		$this->layout='site_layout';
	}	
}
?>
