<?php 
class VideoComment extends AppModel{
	public $belongsTo=array(
				'Link'=>array(
					'className'=>'Link',
					'foreignKey'=>'video_id',
					'dependent'=>true
				)
			);
}
?>