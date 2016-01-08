<?php 
class LiteratureReply extends AppModel{
	public $belongsTo=array(
				'LiteratureComment'=>array(
					'className'=>'LiteratureComment',
					'foreignKey'=>'comment_id',
					'dependent'=>true
				)
			);
}
?>