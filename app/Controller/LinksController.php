<?php 
class LinksController extends AppController {

	var $uses = array('Link','Topic','SubTopic');

		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->allow('view_gallery','get_video');
		}

	function view_gallery($id=NULL)
	{
		$this->layout="video_layout";
		$l=$this->Link->find('all',array('conditions'=>array('Link.topic_id'=>$id)));
		$sub=$this->SubTopic->find('all',array('conditions'=>array('SubTopic.topic_id'=>$id)));
		$this->set('links',$l);
		$this->set('subs',$sub);
	}
	function get_video($id=NULL)
	{
		$this->layout='ajax';
		$l=$this->Link->find('first',array('conditions'=>array('Link.id'=>$id)));
		$this->set('link',$l);

	}
}
?>