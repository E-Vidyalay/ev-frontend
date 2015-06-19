<?php 
class HobbylobbyComment extends AppModel{
	public $belongsTo=array(
				'HobbylobbyPost'=>array(
					'className'=>'HobbylobbyPost',
					'foreignKey'=>'post_id',
					'dependent'=>true
				)
			);
}
?>