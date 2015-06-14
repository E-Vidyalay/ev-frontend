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
		$arr=array();
		$i=0;
		foreach($l as $li){
			$arr[$i]=$li['Link']['sub_topic_id'];
			$i++;
		}
		$fa=array_unique($arr);
		$sba=array();
		foreach($fa as $f){
			$y=0;
			foreach ($l as $li) {
				if($li['Link']['sub_topic_id']==$f){
					$sba[$f][$y]=$li;
					$y++;
				}
			}
		}
		//pr($sba);die();
		$this->set('links',$sba);
	}
	function get_video($id=NULL)
	{
		$this->layout='ajax';
		$l=$this->Link->find('first',array('conditions'=>array('Link.id'=>$id)));
		$this->set('link',$l);

	}
}
?>