<?php
	class TestApplicationsController extends AppController{
		public $uses=array('TestApplication','Student','User','Subject');
		public function test_application(){
			if($this->request->is('post')){
				if($this->TestApplication->save($this->data)){	
					$id=$this->TestApplication->getInsertID();
            		$this->redirect(array('controller'=>'students','action'=>'give_test',$id));
				}
				else{
					$this->Session->setFlash('Sorry, no test available','default',array('class'=>'alert-box radius alert'),'error');
					$this->redirect(array('controller'=>'students','action'=>'give_test',$this->data['TestApplication']['uid']));
				}
			}
		}
	}
?>