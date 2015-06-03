<?php
	class TestResult extends AppModel{
		public $belongsTo=array(
			'QuestionBank'=>array(
				'className'=>'QuestionBank',
				'foreignKey'=>'question_id',
				'dependent'=>true
			),
			'TestApplication'=>array(
				'className'=>'TestApplication',
				'foreignKey'=>'test_id',
				'dependent'=>true
			)
		);
	}
?>