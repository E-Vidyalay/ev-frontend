<?php
class UsersController extends AppController{
	var $helpers = array('Html','Js');
	public function login(){
		$this->layout='site_layout';
		$this->redirect(array('controller'=>'students','action'=>'login'));
	}
}
?>