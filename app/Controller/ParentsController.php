<?php
	class ParentsController extends AppController{
		public $uses=array('User','Student','Parents');

		public function home(){
			$this->layout='parents_layout';
		}
	}
?>