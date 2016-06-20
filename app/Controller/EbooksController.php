<?php
App::uses('CakeEmail', 'Network/Email');
class EbooksController extends AppController{
	public $uses=array('Literature','Ebook','SubLiterature','Level');
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('ebook_contribute');
	}
	public function ebook_contribute(){
		$this->layout="site_layout";
		$sb=$this->SubLiterature->find('all');
		$sl=array();
		foreach ($sb as $key => $value) {
			$sl[$value['SubLiterature']['id']]=$value['Literature']['name']." - ".$value['SubLiterature']['name'];
		}
		$this->set('sl',$sl);
		$this->set('level',$this->Level->find('list',array('fields'=>array('id','level_name'))));
		if($this->request->is('post')){
			$data=$this->data;
			$cat_id=$this->SubLiterature->findById($data['Ebook']['sub_category_id']);
			$data['Ebook']['category_id']=$cat_id['SubLiterature']['literature_id'];
			$data['Ebook']['uploaded_by']=$this->Auth->user('id');
			$this->Ebook->save($data);
			$body="Thank you for  your valuable contribuation,<br/> We are approving this content it may take 24 hrs to approve and display this content. If there are any queries or if the content is not as per the direction we may reject the content and will also ask for the further improvement.";
			$body.="<br/><br/> <b> Regards,<br/>evidyalay team </b>";
			$Email = new CakeEmail();
			$Email->from(array('noreply@evidyalay.net' => 'ઈ-વિદ્યાલય Team'))
					->to($this->Auth->user('username'))
					->subject('Contribution request')
					->emailFormat('html')
					->send($body);

			$body1="There is new contribution request for ebooks kindly verify and approve it.<br/><b> Link to the approval page</b> ".$this->viewVars['admin_url']."/admins/contribute_ebook";

			$Email = new CakeEmail();
			$Email->from(array('noreply@evidyalay.net' => 'ઈ-વિદ્યાલય Team'))
					->to('kashyap.dj9350@gmail.com')
					->subject('Contribution request')
					->emailFormat('html')
					->send($body1);
			$this->Session->setFlash('Thank you for your valuable contribution','default',array('class'=>'alert-box success radius'),'success');
			$this->redirect(array('controller'=>'contributors','action'=>'index'));
		}
	}
}
?>
