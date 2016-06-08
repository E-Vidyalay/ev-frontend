<?php
	class TestApplicationsController extends AppController{
		public $uses=array('TestApplication','Student','User','Subject','Topic','SubTopic');
		public function test_application(){
			if($this->request->is('post')){
				$c=$this->SubTopic->find('list',array('conditions'=>array('topic_id'=>$this->data['TestApplication']['topic_id']),'fields'=>array('id','name')));
				if(count($c)>0){
					$this->layout='site_layout';
					$this->set('sub_topics',$c);
					$this->set('topic_id',$this->data['TestApplication']['topic_id']);
					$this->set('uid',$this->data['TestApplication']['uid']);
					$this->set('student_id',$this->data['TestApplication']['student_id']);

				}
				else{
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

		public function test_sbt_post(){
			if($this->request->is('post')){
				//pr($this->data);die();

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