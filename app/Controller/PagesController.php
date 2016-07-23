<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Admin','User','Article','Level','HobbylobbyPost','HobbylobbyPostCounter','Ebook','LiteraturePost','LiteraturePostCounter','Link','LinksCounter','VideoComment','VideoReply','HobbylobbyComment','HobbylobbyReply','LiteratureComment','LiteratureReply');
    public $helpers = array('SocialShare.SocialShare');
    public function beforeFilter()
    {
        AppController::beforeFilter();

        $this->layout = 'site_layout';

        // Basic setup
        // $this->Auth->authenticate = array('Form');

        // // Pass settings in
        // $this->Auth->authenticate = array(
        //     'Form' => array('userModel' => 'User')
        // );

         $this->Auth->allow('index','display','home','latest_video','latest_post','latest_ebook','latest_lekh','watch_video','watch_post','watch_lekh','developers');
    }

	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}

		$this->set(compact('page', 'subpage', 'title_for_layout'));


        //Create Content
        $article = $this->Article->find('first',array('conditions'=>array('Article.alias'=>$page)));

        if($article==null){
            $this -> redirect(array('controller' => 'Pages', 'action' => 'home'));
        }


        $this->set('article',html_entity_decode($article['Article']['content']));
        $this->set('articleTitle',$article['Article']['title']);

        $this->layout = 'site_layout';


		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}


	}
	public function home(){
		$this->layout='site_layout';
		$this->set('levels',$this->Level->find('all',array('order'=>array('Level.updated_at'=>'asc'))));
	}
	public function latest_video($lid=NULL){
		$this->layout='site_layout';
		//pr($this->Link->find('all',array('conditions'=>array('Topic.level_id'=>$lid,'allow'=>1))));die();
		$this->set('levels',$this->Level->find('all',array('order'=>array('Level.updated_at'=>'asc'))));
		$this->set('links',$this->Link->find('all',array('conditions'=>array('Topic.level_id'=>$lid,'allow'=>1),'order'=>array('Link.updated_at'=>'desc'))));
	}
	public function latest_post($lid=NULL){
		$this->layout='site_layout';
		//pr($this->HobbylobbyPost->find('all',array('conditions'=>array('HobbylobbyPost.level_id'=>$lid))));die();
		$this->set('levels',$this->Level->find('all',array('order'=>array('Level.updated_at'=>'asc'))));
		$this->set('posts',$this->HobbylobbyPost->find('all',array('conditions'=>array('HobbylobbyPost.level_id'=>$lid),'order'=>array('HobbylobbyPost.updated_at'=>'desc'))));	
	}
	public function latest_ebook($lid=NULL){
		$this->layout='site_layout';
		//pr($this->Ebook->find('all',array('conditions'=>array('Ebook.level_id'=>$lid,'allow'=>1),'order'=>array('Ebook.updated_at'=>'desc'))));die();	
		$this->set('levels',$this->Level->find('all',array('order'=>array('Level.updated_at'=>'asc'))));
		$this->set('books',$this->Ebook->find('all',array('conditions'=>array('Ebook.level_id'=>$lid,'allow'=>1),'order'=>array('Ebook.updated_at'=>'desc'))));
	}
	public function latest_lekh($lid=NULL){
		$this->layout='site_layout';
		//pr($this->LiteraturePost->find('all',array('conditions'=>array('LiteraturePost.level_id'=>$lid),'order'=>array('LiteraturePost.updated_at'=>'desc'))));die();	
		$this->set('levels',$this->Level->find('all',array('order'=>array('Level.updated_at'=>'asc'))));
		$this->set('posts',$this->LiteraturePost->find('all',array('conditions'=>array('LiteraturePost.level_id'=>$lid),'order'=>array('LiteraturePost.updated_at'=>'desc'))));
	}
	public function watch_video($id=NULL){
		$this->layout='ajax';
		$this->LinksCounter->_constructDB($id);
		$link=$this->Link->findById($id);
		if($link['Link']['contributed']==0){
			$upload=$this->Admin->findById($link['Link']['uploaded_by']);
			$this->set('uploader',$upload);
		}
		else{
			$upload=$this->User->findById($link['Link']['uploaded_by']);
			$this->set('uploader',$upload);	
		}
		$this->set('links',$link);
		$c=$this->VideoComment->find('all',array('conditions'=>array('video_id'=>$id)));
		$this->set('comments',$c);
		$this->set('replies',$this->VideoReply->find('all'));
	}
	public function watch_post($id=NULL){
		$this->HobbylobbyPostCounter->_constructDB($id);
		$l=$this->HobbylobbyPost->findById($id);
		$this->layout='ajax';
		$this->set('post',$l);
		$c=$this->HobbylobbyComment->find('all',array('conditions'=>array('post_id'=>$id)));
		$this->set('comments',$c);
		$this->set('replies',$this->HobbylobbyReply->find('all'));
	}
	public function watch_lekh($id=null){
			$this->layout='ajax';
			$this->LiteraturePostCounter->_constructDB($id);
			$this->set('value',$this->LiteraturePost->findById($id));
			$this->set('comments',$this->LiteratureComment->find('all',array('conditions'=>array('post_id'=>$id))));
			$this->set('replies',$this->LiteratureReply->find('all'));
	}
	public function developers(){
		$this->layout='site_layout';
	}
}








