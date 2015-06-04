<?php
	class Topic extends AppModel{
		public $belongsTo=array(
			'Level'=>array(
				'className'=>'Level',
				'foreignKey'=>'level_id',
				'dependent'=>true
			),
            'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
				'dependent'=>true
			)
                        
            );
	}
?>