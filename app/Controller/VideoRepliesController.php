<?php
	class VideoRepliesController extends AppController{
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
				if($this->VideoReply->save($this->request->data)){
					if($this->request->isAjax()){
			             $this->render('success','ajax');
			             $id=$this->VideoReply->getInsertID();
						 $r=$this->VideoReply->findById($id);
			             echo "<div class='res'> Reply from - <b>".$r['VideoReply']['name']."</b>, ".$r['VideoReply']['email']."<br/>".$r['VideoReply']['reply']."<span class='right'>".$r['VideoReply']['updated_at']."</span></div> ";
			          }else{


			         $this->Session->setFlash('Message sent');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>