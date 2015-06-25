<?php
	class InformationPost extends AppModel{
		public $actsAs = array('Upload.Upload'=>array('path'=>array('fields'=>array('dir'=>'path_dir'))));
		public $belongsTo=array(
			
			'Admin'=>array(
				'className'=>'Admin',
				'foreignKey'=>'updated_by',
				'dependent'=>false
			)
			);	
	}
?>