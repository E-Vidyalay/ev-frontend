<?php
	class VideoCommentsController extends AppController{
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
				//pr($this->data);
				if($this->VideoComment->save($this->request->data)){
					if($this->request->isAjax()){
			             $this->render('success','ajax');
			             $id=$this->VideoComment->getInsertID();
						$value=$this->VideoComment->findById($id);
						echo "<div class='cmnt'>".$value['VideoComment']['comment']."<br/><b>".$value['VideoComment']['name']."</b>, ".$value['VideoComment']['email']."<span class='right'>".$value['VideoComment']['updated_at']." </span>";
			          }else{


			         $this->Session->setFlash('Message sent');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>