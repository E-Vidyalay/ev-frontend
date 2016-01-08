<?php
class User extends AppModel
{
	public $actsAs = array(
        'Upload.Upload' => array(
            'path' => array(
                'mimetypes'=> array('image/jpg','image/jpeg', 'image/png'),
                'thumbnailMethod'=>"php",
                'extensions'=> array('jpg','png','JPG','PNG','jpeg','JPEG'),
                'thumbnailSizes' => array('small' => '100x100'),
                'fields' => array('dir' => 'path_dir')
            )
        )
    );
    public $validate = array(
        'username'=>array(
            'unique'=>array(
                'rule'=>'isUnique'
            )
        ));
    public function beforeSave($options = array())
    {
        parent::beforeSave($options);

        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }

        return true;
    }

}
?>