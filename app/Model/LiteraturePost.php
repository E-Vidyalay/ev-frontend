<?php 
class LiteraturePost extends AppModel{
	
	public $belongsTo=array(
				'SubLiterature'=>array(
					'className'=>'SubLiterature',
					'foreignKey'=>'sub_literature_id',
					'dependent'=>true
				),
				'Literature'=>array(
					'className'=>'Literature',
					'foreignKey'=>'literature_id',
					'dependent'=>false
				),
				'Admin'=>array(
	                    'className'=>'Admin',
	                    'foreignKey'=>'updated_by',
	                    'dependent'=>true
	            )
			);
}
?>
