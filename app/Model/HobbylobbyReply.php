<?php 
class HobbylobbyReply extends AppModel{
	public $belongsTo=array(
				'HobbylobbyComment'=>array(
					'className'=>'HobbylobbyComment',
					'foreignKey'=>'comment_id',
					'dependent'=>true
				)
			);
}
?>