<?php
	class ParentsController extends AppController{
		public $uses=array('User','Student','Parents');

		public function home(){
			$this->layout='site_layout';
		}
		public function edit_profile($id){
			$this->layout="parent_layout";
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