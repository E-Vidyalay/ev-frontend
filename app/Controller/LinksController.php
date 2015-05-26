<?php 

class LinksController extends AppController{

	var $uses = array('Link','Subject','Standard');

	public function view($id=NULL){
		$this->layout="student_layout";
		$l=$this->Link->find('all',array('conditions'=>array('Link.subject_id'=>$id)));
		//pr($l);
		$this->set('links',$l);
		}
}