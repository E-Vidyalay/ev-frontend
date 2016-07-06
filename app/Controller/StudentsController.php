<?php
	class StudentsController extends AppController{
		public $uses=array('User','Student','Subject','TestApplication','QuestionBank','Topic','Standard');

		public function home(){
			$this->layout='site_layout';
			if($this->Auth->user('UserType.name')=='Student'){
				$student=$this->Student->find('first',array('conditions'=>array('Student.user_id'=>$this->Auth->user('id'))));
				$th=$this->TestApplication->find('all',array('conditions'=>array('TestApplication.student_id'=>$student['Student']['id'])));
				$this->set('test_history',$th);
			}
			else{
				$this->Session->setFlash('You are not authorized to access this Location.','default',array('class'=>'alert-box radius alert'),'error');
				$this->redirect(array('controller'=>'Pages','action'=>'home'));
			}

		}

		public function test_application(){
			$this->layout='site_layout';
			if($this->Auth->user('UserType.name')=='Student'){
				$student=$this->Student->find('first',array('conditions'=>array('Student.user_id'=>$this->Auth->user('id'))));
				$this->set('student_id',$student['Student']['id']);
				$subjects=$this->Topic->find('list',array('fields'=>array('id','display_name')));
				$this->set('subjects',$subjects);
				$standard=$this->Standard->find('list',array('fields'=>array('id','name')));
				$this->set('standards',$standard);
				$this->set('uid',$this->Auth->user('id'));
				if($this->request->is('post')){
					$this->TestApplication->save($this->data);	
				}
			}
			else{
				$this->Session->setFlash('You are not authorized to access this Location.','default',array('class'=>'alert-box radius alert'),'error');
				$this->redirect(array('controller'=>'students','action'=>'home'));	
			}
		}

		public function give_test($id){
			$this->layout='site_layout';
			if($this->Auth->user('UserType.name')=='Student'){
				$this->set('test_id',$id);
				$test=$this->TestApplication->findById($id);
				$level=$this->Level->findById($test['Standard']['level_id']);
				$this->set('level_color',$level);
				$questions=array();
				if($test['TestApplication']['sub_topic_id']!=""){
					$questions=$this->QuestionBank->find('all',array('conditions'=>array('QuestionBank.topic_id'=>$test['TestApplication']['topic_id'],'QuestionBank.sub_topic_id'=>$test['TestApplication']['sub_topic_id'],'QuestionBank.standard_id'=>$test['TestApplication']['standard_id'])));
				}
				else{
					$questions=$this->QuestionBank->find('all',array('conditions'=>array('QuestionBank.topic_id'=>$test['TestApplication']['topic_id'],'QuestionBank.standard_id'=>$test['TestApplication']['standard_id'])));
				}
				$c=count($questions);
				if($c>=10){
					$random_key=array_rand($questions,10);
					$random_question=array();
					for($i=0;$i<count($random_key);$i++){
						$random_question[]=$questions[$random_key[$i]];
					}
					shuffle($random_question);
					$this->set('questions',$random_question);
				}
				else{
					$this->TestApplication->delete($id);
					$this->Session->setFlash('માફ કરશો કોઈ ક્વિઝ ઉપલબ્ધ છે','default',array('class'=>'alert-box radius alert'),'error');
							$this->redirect(array('controller'=>'students','action'=>'home'));
				}
			}
			else{
				$this->Session->setFlash('You are not authorized to access this Location.','default',array('class'=>'alert-box radius alert'),'error');
				$this->redirect(array('controller'=>'students','action'=>'home'));
			}
		}
		public function edit_profile(){
			$this->layout="site_layout";
			$stu=$this->User->findById($this->Auth->user('id'));
			if(empty($this->data))
        	{
            	$this->data=$this->User->findById($this->Auth->user('id'));
        	}
		}
		public function get_topic($id=null){
		$this->layout='ajax';
		$standard=$this->Standard->find('first',array('conditions'=>array('Standard.id'=>$id)));
		//pr($standard);
		if(isset($id)){
			$topic=$this->Topic->find('list',array('fields'=>array('id','display_name'),'conditions'=>array('level_id'=>$standard['Standard']['level_id'])));
			if($topic!=null){
				$this->set('if_topic_data',true);
				$this->set('subjects',$topic);
			}
			else{
				$this->set('if_topic_data',false);
			}
		}
		else{
			$this->set('if_topic_data',false);
		}
	}	
	}
?>