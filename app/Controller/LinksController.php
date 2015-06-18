<?php 
class LinksController extends AppController {

	var $uses = array('Link','Topic','SubTopic','Level','Subject','VideoComment','VideoReply');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('view_gallery','view_video','test','get_video','index','get_no_sub','get_sub_topics','get_subject','get_topics','get_links');
	}
	public function index(){
		$date = new DateTime('15 days ago');
		$cdate=$date->format('Y-m-d');
		// $lt=$this->Ebook->find('all',array('conditions'=>array('DATE(Ebook.updated_at) >'=>$cdate)));
		// $this->set('latest',$lt);

		$this->layout='video_layout';
		$lt=$this->Topic->find('all');
		$this->set('lit',$lt);
		$slt=$this->SubTopic->find('all');
		$this->set('slit',$slt);
		$this->set('subjects',$this->Subject->find('all'));
		$this->set('videos',$this->Link->find('all'));
		$this->set('levels',$this->Level->find('all',array('order'=>array('Level.updated_at'=>'asc'))));
	}
	public function get_no_sub($id=null){
		$this->layout='ajax';
		$this->set('tps',$this->Topic->findById($id));
		$links=$this->Link->find('all',array('conditions'=>array('Link.topic_id'=>$id)));
		$this->set('links',$links);
		if(count($links)>0){
		$this->set('comments',$this->VideoComment->find('all',array('conditions'=>array('video_id'=>$links[0]['Link']['id']))));
		$this->set('replies',$this->VideoReply->find('all'));
		
		}
	}
	public function get_subject($id=null){
		$this->layout='ajax';
		$topics=$this->Topic->find('all',array('conditions'=>array('level_id'=>$id)));
		if(count($topics)>0){
			$subjects_array=array();
			$i=0;
			foreach($topics as $t){
				$subjects_array[$i]=$t['Subject']['id'];
			}
			$fa=array_unique($subjects_array);
			$sba=array();
			$subs=$this->Subject->find('all');
			foreach($fa as $f){
				$y=0;
				foreach ($subs as $s) {
					if($s['Subject']['id']==$f){
						$sba[$y]=$s;
						$sba[$y]['level_id']=$id;
						$y++;
					}
				}
			}
			$this->set('subjects',$sba);
		}
		else{
			$this->set('err','Sorry, no subjects found for this level');
		}
		
	}
	function view_video($id){
		$l=$this->Link->findById($id);
		$this->layout='ajax';
		$this->set('links',$l);
		$c=$this->VideoComment->find('all',array('conditions'=>array('video_id'=>$id)));
		$this->set('comments',$c);
		$this->set('replies',$this->VideoReply->find('all'));
	}
	function get_topics($sub_id=null, $level_id=null){
		$this->set('subject',$this->Subject->findById($sub_id));
		$topics=$this->Topic->find('all',array('conditions'=>array('Topic.level_id'=>$level_id,'Topic.subject_id'=>$sub_id)));
		$this->layout='ajax';
		$this->set('topics',$topics);
		$this->set('subs',$this->SubTopic->find('all'));
	}
	function get_sub_topics($tid=null){
		$this->layout='ajax';
		$this->set('subject',$this->Topic->findById($tid));
		$this->set('subs',$this->SubTopic->find('all',array('conditions'=>array('topic_id'=>$tid))));
	}
	function get_links($id){
		$this->layout='ajax';
		$sb=$this->SubTopic->findById($id);
		$sub=$this->Topic->findById($sb['Topic']['id']);
		$this->set('subTopic',$sb);
		$this->set('tps',$sub);
		$links=$this->Link->find('all',array('conditions'=>array('Link.sub_topic_id'=>$id)));
		$this->set('links',$links);
		if(count($links)>0){
		$this->set('comments',$this->VideoComment->find('all',array('conditions'=>array('video_id'=>$links[0]['Link']['id']))));
		$this->set('replies',$this->VideoReply->find('all'));
		}
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
		pr($sba);
		$this->set('links',$sba);
	}

	function get_video($id=NULL)
	{
		$this->layout='ajax';
		$l=$this->Link->findById($id);
		$this->set('links',$l);
		$c=$this->VideoComment->find('all',array('conditions'=>array('video_id'=>$id)));
		$this->set('comments',$c);
		$this->set('replies',$this->VideoReply->find('all'));
	}
}
?>