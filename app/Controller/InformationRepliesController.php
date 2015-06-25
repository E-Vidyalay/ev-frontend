<?php
	class InformationRepliesController extends AppController{
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
				if($this->InformationReply->save($this->request->data)){
					if($this->request->isAjax()){
			             $this->render('success','ajax');
			             $id=$this->InformationReply->getInsertID();
						 $r=$this->InformationReply->findById($id);
			             echo "<div class='res'> Reply from - <b>".$r['InformationReply']['name']."</b>, ".$r['InformationReply']['email']."<br/>".$r['InformationReply']['text']."<span class='right'>".$r['InformationReply']['updated_at']."</span></div> ";
			          }else{


			         $this->Session->setFlash('Message sent');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>