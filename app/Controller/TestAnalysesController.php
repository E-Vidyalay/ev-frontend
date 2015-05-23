<?php
	class TestAnalysesController extends AppController{
		function index(){
			$this->layout="site_layout";

			if($this->Session->check('Auth.Student')){
				$this->redirect(array('controller'=>'TestAnalyses', 'action'=>'hello'));
			}
		}

		function hello(){
			$this->layout="site_layout";
		}
	}
?>