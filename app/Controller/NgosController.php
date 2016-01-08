<?php
	class NgosController extends AppController{
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index','register');
		}
		public function index(){
			//$this->layout='site_layout';
			$this->layout='site_layout';
			$ngos= $this->Ngo->find('all');
			$this->set('ngos',$ngos);
		}

		public function register(){
			$this->layout='site_layout';			

			if($this->request->is('post')){
				$data=$this->data;
				pr($data);
				if($this->Ngo->save($data))
				{	
					$this->Session->setFlash('NGO has been successfully added','default',array('class'=>'alert-box success radius'),'success');
					$this->redirect(array('controller'=>'ngos','action'=>'register'));

				}
				else{
					$this->Session->setFlash('NGO has not been added','default',array('class'=>'alert-box alert radius'),'error');
					//$this->redirect(array('action'=>'register'));
				}
			}
		}

	}
?>