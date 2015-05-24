<?php
	class StudentsController extends AppController{
		public $uses=array('User','Student');

		public function home(){
			$this->layout='student_layout';
		}
	}
?>