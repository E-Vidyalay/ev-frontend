<?php
	class LiteratureCommentsController extends AppController{
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
				if($this->LiteratureComment->save($this->request->data)){
					if($this->request->isAjax()){
			            $this->render('success','ajax');
						$id=$this->LiteratureComment->getInsertID();
						$value=$this->LiteratureComment->findById($id);
						echo "<div class='cmnt'>"."<span class='right'>".$value['LiteratureComment']['updated_at']." </span>".$value['LiteratureComment']['text']."<br/><b>".$value['LiteratureComment']['name']."</b>, ".$value['LiteratureComment']['email'];
						
			          }else{
			         $this->Session->setFlash('Comment Posted', 'default', array('class' => 'alert-box success radius') , 'success');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>