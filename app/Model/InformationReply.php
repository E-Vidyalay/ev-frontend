<?php 
class InformationReply extends AppModel{
	public $belongsTo=array(
				'InformationComment'=>array(
					'className'=>'InformationComment',
					'foreignKey'=>'comment_id',
					'dependent'=>true
				)
			);
}
?>