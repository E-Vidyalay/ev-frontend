<?php
	class StudentsController extends AppController{
		public function index(){
			$this->layout='default';
		}

		public function login(){
			$this->layout='default';
			if($this->Session->check('Auth.Student')){
				$this->redirect(array('controller'=>'Students','action'=>'index'));
			}
			if($this->request->is('post')){
				if($this->Auth->login()){
					$this->Session->setFlash('Logged in successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect($this->Auth->redirectUrl());
				}
				else{
					$this->Session->setFlash('Sorry invalid Studentname or password','default',array('class'=>'alert alert-danger'),'error');
				}
			}
		}
		public function logout(){
			$this->layout='default';
			if($this->Auth->logout()){
				$this->Session->setFlash('Logged out successfully','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Students','action'=>'login'));
			}
			else{
				die("error");
			}
		}
		public function register(){
			$this->layout='default';
	    	if($this->request->is('post')){
	    		$data=$this->request->data;
	    		$data['Student']['email']=$data['Student']['username'];
	    		if($this->Student->save($data)){
	    			$this->Session->setFlash('Successfully registered, approval email is sent to you, please apporve it first','default',array('class'=>'alert-box success radius'),'success');
	            	$this->redirect(array('controller'=>'Students','action'=>'index'));
	    		}
	    		else{
	    			$this->Session->setFlash('Sorry, there was error','default',array('class'=>'alert-box alert radius'),'error');
	    		}
		}
	}
}
	
?>