<?php
	class TeacherssController extends AppController{
		public $uses=array('User','Student','Teacher');

		public function home(){
			$this->layout='teachers_layout';
		}
	}
?>