<?php
	class Ebook extends AppModel{
		public $actsAs = array('Upload.Upload'=>array('path'=>array('fields'=>array('dir'=>'path_dir'))));
		public $belongsTo=array(
			'Level'=>array(
				'className'=>'Level',
				'foreignKey'=>'level_id',
				'dependent'=>true
			),
			'SubLiterature'=>array(
				'className'=>'SubLiterature',
				'foreignKey'=>'sub_category_id',
				'dependent'=>true
			),
			'Literature'=>array(
				'className'=>'Literature',
				'foreignKey'=>'category_id',
				'dependent'=>false
			)
			);	
	}
?>