
              <?php 
              if(empty($activeUser['User']['path'])){
                    echo $this->Html->image('user_avatar.png',array('class'=>'usr-img-preview','id'=>'blah','height'=>'150px','width'=>'150px'));
                }
                else{
                  echo '<img id="blah" src="'.$this->webroot.'files/user/path/'.$activeUser['User']['id'].'/'.$activeUser['User']['path'].'" class="usr-img-preview" />';
                  echo '<a id="removeDp" href="#" class="button tiny alert radius">Remove Photo</a>';
                }?>
