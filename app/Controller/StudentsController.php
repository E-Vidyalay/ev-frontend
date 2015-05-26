<?php
	class StudentsController extends AppController{
		public $uses=array('User','Student','Subject','TestApplication','QuestionBank');

		public function home(){
			$this->layout='student_layout';
			$student=$this->Student->find('first',array('conditions'=>array('Student.user_id'=>$this->Auth->user('id'))));
			$th=$this->TestApplication->find('all',array('conditions'=>array('TestApplication.student_id'=>$student['Student']['id'])));
			$this->set('test_history',$th);

		}

		public function test_application($id=null){
			$this->layout='student_layout';
			$student=$this->Student->find('first',array('conditions'=>array('Student.user_id'=>$id)));
			$this->set('student_id',$student['Student']['id']);
			$subjects=$this->Subject->find('list',array('fields'=>array('id','display_name')));
			//pr($subjects);
			$this->set('subjects',$subjects);
			$this->set('uid',$id);
			
		}

		public function give_test($id){
			$this->layout='student_layout';
			$this->set('test_id',$id);
			$test=$this->TestApplication->findById($id);
			$questions=$this->QuestionBank->find('all',array('conditions'=>array('QuestionBank.subject_id'=>$test['TestApplication']['subject_id'])));
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

			}
		}
	}
?>