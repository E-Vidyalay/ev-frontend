<?php 
class VideoReply extends AppModel{
	public $belongsTo=array(
				'VideoComment'=>array(
					'className'=>'VideoComment',
					'foreignKey'=>'comment_id',
					'dependent'=>true
				)
			);
}
?>