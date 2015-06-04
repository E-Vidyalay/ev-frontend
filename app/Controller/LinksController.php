<?php 
class LinksController extends AppController {

	var $uses = array('Link','Topic','SubTopic');

		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('view_gallery');
		}

	function view_gallery($id=NULL)
	{
		$this->layout="site_layout";
		$l=$this->Link->find('all',array('conditions'=>array('Link.topic_id'=>$id)));
		$sub=$this->SubTopic->find('all',array('conditions'=>array('SubTopic.topic_id'=>$id)));
		$this->set('links',$l);
		$this->set('subs',$sub);
	}
}
?>