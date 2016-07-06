<?php
	class TestResultsController extends AppController{
		public $uses=array('TestResult','TestApplication','Student','User','QuestionBank','Markingscheme','Level');

		public function generate_result(){
			$this->layout='site_layout';
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
					$this->Session->setFlash('Quiz submited Successfully!','default',array('class' => 'alert-box success radius') , 'success');
					$this->redirect(array('controller'=>'TestResults','action'=>'get_result',$this->data['TestResult']['test_id']));
				}
			}
		}

		public function get_result($id){
			$this->layout='site_layout';
			$test_data=$this->TestResult->find('all',array('conditions'=>array('TestResult.test_id'=>$id)));
			//pr($test_data);
			$total_questions=count($test_data);
			// foreach($test_data as $posimrks) {
			// 	pr($this->Markingscheme->find('first',array('conditions'=>array('id'=>$posimrks['QuestionBank']['markingscheme_id']))));
			// }
			$correct_ans=0;
			$incorrect_ans=0;
			$unanswered=0;
			$positive_mrk=0;
			$negative_mrk=0;
			$total_marks=0;
			foreach ($test_data as $t) {
					$scheme=$this->Markingscheme->find('first',array('conditions'=>array('id'=>$t['QuestionBank']['markingscheme_id'])));
					$total_marks=$total_marks+$scheme['Markingscheme']['positive_marks'];
					if($t['TestResult']['result']==-1){
						$negative_mrk=$negative_mrk+$scheme['Markingscheme']['negative_marks'];
						$incorrect_ans++;
					}
					else if($t['TestResult']['result']==0){
						$unanswered++;
					}
					else{
						$positive_mrk=$positive_mrk+$scheme['Markingscheme']['positive_marks'];
						$correct_ans++;
					}
			}
			// pr($total_marks);
			// pr($positive_mrk);
			// pr($negative_mrk);
			$test=$this->TestApplication->findById($id);
			$level=$this->Level->findById($test['Standard']['level_id']);
			$this->set('level_color',$level);
			$this->set('test_meta',$test);
			$this->set('correct_ans',$correct_ans);
			$this->set('incorrect_ans',$incorrect_ans);
			$this->set('unanswered',$unanswered);
			$marks_obtained=$positive_mrk-$negative_mrk;
			$this->set('total',$total_marks);
			$this->set('obtained',$marks_obtained);
			$this->set('test_questions',$test_data);
		}	
	}
?>