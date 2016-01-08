<?php
	class LiteratureRepliesController extends AppController{
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
				if($this->LiteratureReply->save($this->request->data)){
					if($this->request->isAjax()){
			             $this->render('success','ajax');
			             $id=$this->LiteratureReply->getInsertID();
						 $r=$this->LiteratureReply->findById($id);
			             echo "<div class='res'> Reply from - <b>".$r['LiteratureReply']['name']."</b>, ".$r['LiteratureReply']['email']."<br/>".$r['LiteratureReply']['text']."<span class='right'>".$r['LiteratureReply']['updated_at']."</span></div> ";
			          }else{


			         $this->Session->setFlash('Message sent');
			         $this->redirect(array('action'=>'index'));
			      }
					
				}
			}
		}
	}
?>