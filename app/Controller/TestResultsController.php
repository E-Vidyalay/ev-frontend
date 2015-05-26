<?php
	class TestResultsController extends AppController{
		public $uses=array('TestResult','TestApplication','Student','User','QuestionBank');

		public function generate_result(){
			$this->layout='student_layout';
			if($this->request->is('post')){
				$data=$this->data['Question'];
				for($i=0;$i<count($data);$i++){
					$ans_string=implode(",", $data[$i]['ans']);
					$data[$i]['ans_s']=$ans_string;
					$data[$i]['test_id']=$this->data['TestResult']['test_id'];
					if($ans_string=="0,0,0,0,0"){
						$data[$i]['result']=0;
					}
					else if($ans_string==$data[$i]['correct_ans']){
						$data[$i]['result']=1;
					}
					else{
						$data[$i]['result']=-1;
					}
				}
				if($this->TestResult->saveMany($data)){
					$this->Session->setFlash('Quiz submited Successfully!','default',array('class'=>'alert-box radius success'),'success');
					$this->redirect(array('controller'=>'TestResults','action'=>'get_result',$this->data['TestResult']['test_id']));
				}
			}
		}

		public function get_result($id){
			$this->layout='student_layout';
			$test_data=$this->TestResult->find('all',array('conditions'=>array('TestResult.test_id'=>$id)));
			$positive_mrk=5;
			$negative_mrk=1;
			$total_questions=count($test_data);
			$total_marks=$total_questions*$positive_mrk;
			$correct_ans=0;
			$incorrect_ans=0;
			$unanswered=0;
			foreach ($test_data as $t) {
					if($t['TestResult']['result']==-1){
						$incorrect_ans++;
					}
					else if($t['TestResult']['result']==0){
						$unanswered++;
					}
					else{
						$correct_ans++;
					}
			}
			$test=$this->TestApplication->findById($id);
			$this->set('test_meta',$test);
			$this->set('correct_ans',$correct_ans);
			$this->set('incorrect_ans',$incorrect_ans);
			$this->set('unanswered',$unanswered);
			$marks_obtained=($correct_ans*$positive_mrk)-($incorrect_ans*$negative_mrk)+($unanswered*0);
			$this->set('total',$total_marks);
			$this->set('obtained',$marks_obtained);
		}	
	}
?>