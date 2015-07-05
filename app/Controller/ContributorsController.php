<?php
class ContributorsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();

	}
	public function index(){
		$this->layout='site_layout';
	}
	public function edit_profile($id){
			$this->layout="site_layout";
			$stu=$this->User->findById($id);
			$uid=$stu['User']['id'];
			$this->set('id',$uid);
			if(empty($this->data))
        	{
            	$this->data=$this->User->findById($id);
        	}
		}	
}
?>
