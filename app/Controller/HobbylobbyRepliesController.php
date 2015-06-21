<?php
	class HobbylobbyRepliesController extends AppController{
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
				if($this->HobbylobbyReply->save($this->request->data)){
					if($this->request->isAjax()){
			             $this->render('success','ajax');
			             $id=$this->HobbylobbyReply->getInsertID();
						 $r=$this->HobbylobbyReply->findById($id);
			             echo "<div class='res'> Reply from - <b>".$r['HobbylobbyReply']['name']."</b>, ".$r['HobbylobbyReply']['email']."<br/>".$r['HobbylobbyReply']['text']."<span class='right'>".$r['HobbylobbyReply']['updated_at']."</span></div> ";
			          }else{


			         $this->Session->setFlash('Message sent');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>