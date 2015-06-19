<?php
class HobbylobbyPost extends AppModel{
    public $belongsTo=array(
            'Level'=>array(
                'className'=>'Level',
                'foreignKey'=>'level_id',
                'dependent'=>true
            ),
            'Hobby'=>array(
                'className'=>'Hobby',
                'foreignKey'=>'hobby_id',
                'dependent'=>true
            ),
            'SubHobby'=>array(
                'className'=>'SubHobby',
                'foreignKey'=>'sub_hobby_id',
                'dependent'=>true
            ),
            'Admin'=>array(
                    'className'=>'Admin',
                    'foreignKey'=>'updated_by',
                    'dependent'=>true
                )); 

	
	}
?>
