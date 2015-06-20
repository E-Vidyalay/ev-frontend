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
				pr($this->data);
				if($this->HobbylobbyReply->save($this->request->data)){
					if($this->request->isAjax()){
			             $this->render('success','ajax');
			             $id=$this->HobbylobbyReplies->getInsertID();
						 $r=$this->HobbylobbyReplies->findById($id);
			             echo "<div class='res'> Reply from - <b>".$r['HobbylobbyReplies']['name']."</b>, ".$r['HobbylobbyReplies']['email']."<br/>".$r['HobbylobbyReplies']['reply']."<span class='right'>".$r['HobbylobbyReplies']['updated_at']."</span></div> ";
			          }else{


			         $this->Session->setFlash('Message sent');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>