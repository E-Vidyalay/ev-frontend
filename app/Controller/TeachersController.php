<?php
	class TeachersController extends AppController{
		public $uses=array('User','Student','Teacher');

		public function home(){
			$this->layout='teacher_layout';
		}
	}
?>