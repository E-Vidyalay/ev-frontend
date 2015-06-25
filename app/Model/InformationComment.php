<?php 
class InformationComment extends AppModel{
	public $belongsTo=array(
				'InformationPost'=>array(
					'className'=>'InformationPost',
					'foreignKey'=>'post_id',
					'dependent'=>true
				)
			);
}
?>