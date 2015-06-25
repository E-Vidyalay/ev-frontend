<?php
	class InformationCommentsController extends AppController{
		public $helpers = array('Js');
		public $components = array('RequestHandler');
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('index','success');
			if ($this->request->is('ajax')) {
				$this->layout = 'ajax';
			}
		}
		public function success(){
			
		}
		public function index(){
			if(!empty($this->data)){
				//pr($this->data);
				if($this->InformationComment->save($this->request->data)){
					if($this->request->isAjax()){
			            $this->render('success','ajax');
						$id=$this->InformationComment->getInsertID();
						$value=$this->InformationComment->findById($id);
						echo "<div class='cmnt'>".$value['InformationComment']['text']."<br/><b>".$value['InformationComment']['name']."</b>, ".$value['InformationComment']['email']."<span class='right'>".$value['InformationComment']['updated_at']." </span>";
						
			          }else{
			         $this->Session->setFlash('Comment Posted', 'default', array('class' => 'alert-box success radius') , 'success');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>