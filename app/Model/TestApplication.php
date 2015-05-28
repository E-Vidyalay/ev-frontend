<?php
	class TestApplication extends AppModel{
		public $belongsTo=array(
			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
				'dependent'=>true
			),
			'Student'=>array(
				'className'=>'Student',
				'foreignKey'=>'student_id',
				'dependent'=>true
			)
		);	
	}
?>