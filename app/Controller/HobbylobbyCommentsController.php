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
				if($this->HobbylobbyComment->save($this->request->data)){
					if($this->request->isAjax()){
			             $this->render('success','ajax');
			              $id=$this->HobbylobbyComment->getInsertID();
						$value=$this->HobbylobbyComment->findById($id);
						echo "<div class='cmnt'>"."<span class='right'>".$value['HobbylobbyComment']['updated_at']."</span>".$value['HobbylobbyComment']['text']."<br/><b>".$value['HobbylobbyComment']['name']."</b>, ".$value['HobbylobbyComment']['email'];
			          }else{
			         $this->Session->setFlash('Comment Posted', 'default', array('class' => 'alert-box success radius') , 'success');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>