<?php
	class NewsLetter extends AppModel{
		public $belongsTo=array(
				'Admin'=>array(
					'className'=>'Admin',
					'foreignKey'=>'user_id',
					'dependent'=>true
				)
			);
	}
?>