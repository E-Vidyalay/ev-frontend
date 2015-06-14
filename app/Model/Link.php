<?php 
class Link extends AppModel{
	public $belongsTo=array(
				'Topic'=>array(
					'className'=>'Topic',
					'foreignKey'=>'topic_id',
					'dependent'=>true
				),
				'SubTopic'=>array(
					'className'=>'SubTopic',
					'foreignKey'=>'sub_topic_id',
					'dependent'=>false
				)
			);
}
?>