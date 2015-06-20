<?php
	class HobbylobbyCommentsController extends AppController{
		public $helpers = array('Js');
		public $components = array('RequestHandler');
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index');
			if ($this->request->is('ajax')) {
				$this->layout = 'ajax';
			}
		}
		public function index(){
			if(!empty($this->data)){
				pr($this->data);
				if($this->HobbylobbyComment->save($this->request->data)){
					if($this->request->isAjax()){
			             $this->render('success','ajax');
			              $id=$this->HobbylobbyComment->getInsertID();
						$value=$this->HobbylobbyComment->findById($id);
						echo "<div class='cmnt'>".$value['HobbylobbyComment']['comment']."<br/><b>".$value['HobbylobbyComment']['name']."</b>, ".$value['HobbylobbyComment']['email']."<span class='right'>".$value['HobbylobbyComment']['updated_at']." </span>";
			          }else{


			         $this->Session->setFlash('Message sent');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>