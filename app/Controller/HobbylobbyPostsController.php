<?php 
class HobbylobbyPostsController extends AppController {

	var $uses = array('HobbylobbyPost','Hobby','SubHobby','Level','HobbylobbyComment','HobbylobbyReply');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index','get_hobby','get_sub_hobby','get_posts','get_post','view_post');
	}
	public function index(){
		$date = new DateTime('15 days ago');
		$cdate=$date->format('Y-m-d');
		$lt=$this->HobbylobbyPost->find('all',array('conditions'=>array('DATE(HobbylobbyPost.updated_at) >'=>$cdate),'order'=>array('HobbylobbyPost.updated_at'=>'desc')));
		$this->set('latest',$lt);
		$this->layout='site_layout';
		$hb=$this->Hobby->find('all');
		$this->set('hb',$hb);
		$shb=$this->SubHobby->find('all');
		$this->set('shb',$shb);
		$this->set('posts',$this->HobbylobbyPost->find('all',array('order'=>array('HobbylobbyPost.updated_at'=>'desc'))));
		$this->set('levels',$this->Level->find('all',array('order'=>array('Level.updated_at'=>'asc'))));
	}
	public function get_hobby($id=null){
		$this->layout='ajax';
		$topics=$this->Hobby->find('all');
		if(count($topics)>0){
			$this->set('hobbys',$topics);
			$this->set('lid',$id);
		}
		else{
			$this->set('err','Sorry, no Hobbies found for this level');
		}
		
	}
	function get_sub_hobby($hb_id=null,$lid=null){
		$this->set('hobby',$this->Hobby->findById($hb_id));
		$hobbys=$this->SubHobby->find('all',array('conditions'=>array('SubHobby.hobby_id'=>$hb_id)));
		$this->layout='ajax';
		$this->set('subhobbys',$hobbys);
		$this->set('lid',$lid);
	}
	function get_posts($id=null,$lid=null){
		$this->layout='ajax';
		$sub=$this->SubHobby->findById($id);
		$hob=$this->Hobby->findById($sub['SubHobby']['hobby_id']);
		$this->set('subHobby',$sub);
		//pr($hob);die();
		$this->set('tps',$hob);
		$posts=$this->HobbylobbyPost->find('all',array('conditions'=>array('HobbylobbyPost.sub_hobby_id'=>$sub['SubHobby']['id'],'HobbylobbyPost.level_id'=>$lid),'order'=>array('HobbylobbyPost.updated_at'=>'desc')));
		//pr($posts);die();
		$this->set('posts',$posts);
		if(count($posts)>0){
		$this->set('comments',$this->HobbylobbyComment->find('all',array('conditions'=>array('post_id'=>$posts[0]['HobbylobbyPost']['id']))));
		$this->set('replies',$this->HobbylobbyReply->find('all'));
		}
	}
	function get_post($id=NULL)
	{
		$this->layout='ajax';
		$l=$this->HobbylobbyPost->findById($id);
		$this->set('post',$l);
		$c=$this->HobbylobbyComment->find('all',array('conditions'=>array('post_id'=>$id)));
		$this->set('comments',$c);
		$this->set('replies',$this->HobbylobbyReply->find('all'));
	}
	function view_post($id){
		$l=$this->HobbylobbyPost->findById($id);
		$this->layout='ajax';
		$this->set('post',$l);
		$c=$this->HobbylobbyComment->find('all',array('conditions'=>array('post_id'=>$id)));
		$this->set('comments',$c);
		$this->set('replies',$this->HobbylobbyReply->find('all'));
	}

}
?>