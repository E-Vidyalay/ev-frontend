<?php
	class Teacher extends AppModel{
		public $validate = array(
			'username' => array(
				'required'=>array(
					'rule'=>array('notEmpty'),'message'=>'A Username is Required')),
			'password'=>array(
				'required'=>array(
					'rule'=>array('notEmpty'),'message'=>'A Password is Required')));
		public function beforeSave($options = array()) {
    		if(isset($this->data[$this->alias]['password'])) {
        		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    		}
    		if (isset($this->data[$this->alias]['password_update'])) {
				$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
			}
		
			// fallback to our parent
			return parent::beforeSave($options);
		}
	}
?>