<?php
	class QuestionBank extends AppModel{
		public $belongsTo=array(
			'Topic'=>array(
				'className'=>'Topic',
				'foreignKey'=>'topic_id',
				'dependent'=>true
			));	
	}
?>