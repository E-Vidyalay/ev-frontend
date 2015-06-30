<?php

class SubLiterature extends AppModel{
	public $belongsTo=array(
			'Literature'=>array(
				'className'=>'Literature',
				'foreignKey'=>'literature_id',
				'dependent'=>true
			));
	}
?>
