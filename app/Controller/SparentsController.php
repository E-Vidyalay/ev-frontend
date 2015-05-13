<?php
	class SparentsController extends AppController{
		public function index(){
			$this->layout='site_layout';
		}
		public function beforeFilter(){
			parent::beforeFilter();
			//$this->Auth->authorize = 'actions';
			//$this->Auth->initialize = array('controller'=>'Parents');
			//$this->Auth->authenticate = array('Form');
			$this->Auth->authenticate = array(
	            'Form' => array('userModel' => 'Sparent')
	        );
	        $this->Auth->allow('logout','login','register');
		}

		public function login(){
			$this->layout='site_layout';
			if($this->Session->check('Auth.Sparent')){
				$this->redirect(array('controller'=>'Sparents','action'=>'index'));
			}
			if($this->request->is('post')){
				if($this->Auth->login()){
					$this->Session->setFlash('Logged in successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect($this->Auth->redirectUrl());
				}
				else{
					$this->Session->setFlash('Sorry invalid username or password','default',array('class'=>'alert alert-danger'),'error');
				}
			}
		}
		public function logout(){
			$this->layout='site_layout';
			if($this->Auth->logout()){
				$this->Session->setFlash('Logged out successfully','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Sparents','action'=>'login'));
			}
			else{
				die("error");
			}
		}
		public function register(){
			$this->layout='site_layout';
	    	if($this->request->is('post')){
	    		$data=$this->request->data;
	    		$data['Sparent']['email']=$data['Sparent']['username'];
	    		if($this->Sparent->save($data)){
	    			$this->Session->setFlash('Successfully registered, approval email is sent to you, please apporve it first','default',array('class'=>'alert-box success radius'),'success');
	            	$this->redirect(array('controller'=>'Sparents','action'=>'login'));
	    		}
	    		else{
	    			$this->Session->setFlash('Sorry, there was error','default',array('class'=>'alert-box alert radius'),'error');
	    		}
		}
	}
}
	
?>