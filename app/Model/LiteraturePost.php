<?php
	class LiteraturePost extends AppModel{
		public $actsAs = array('Upload.Upload'=>array('path'=>array('fields'=>array('dir'=>'path_dir'))));
		public $belongsTo=array(
			'Level'=>array(
				'className'=>'Level',
				'foreignKey'=>'level_id',
				'dependent'=>true
			),
			'SubLiterature'=>array(
				'className'=>'SubLiterature',
				'foreignKey'=>'sub_literature_id',
				'dependent'=>false
			),
			'Literature'=>array(
				'className'=>'Literature',
				'foreignKey'=>'literature_id',
				'dependent'=>false
			),
			'Admin'=>array(
				'className'=>'Admin',
				'foreignKey'=>'updated_by',
				'dependent'=>false
			)
			);	
	}
?>