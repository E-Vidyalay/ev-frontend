<?php 
class LiteratureComment extends AppModel{
	public $belongsTo=array(
				'LiteraturePost'=>array(
					'className'=>'LiteraturePost',
					'foreignKey'=>'post_id',
					'dependent'=>true
				)
			);
}
?>