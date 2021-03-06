<div class="row">
  <div class="columns large-4 large-offset-4 medium-8 medium-offset-2 small-10 small-offset-1" style="background:#fff;padding:20px">
    <h3> Edit Profile </h3>
    <hr/>
    <?php
      echo $this->Form->create('User',array('type'=>'file','controller'=>'users','url'=>'edit_profile'));
      echo $this->Form->input('id',array('type'=>'hidden'));
      echo $this->Form->input('name',array('type'=>'text','required','placeholder'=>'Name','label'=>'Name'));
      // echo $this->Form->input('password',array('type'=>'password','placeholder'=>'Old Password','label'=>'Old Password'));
      echo $this->Form->input('newpassword',array('type'=>'password','placeholder'=>'New Password','label'=>'New Password'));
      echo '<hr/>';
      echo '<label><b>If you want to change you existing email Id.</b></label>';
      echo $this->Form->input('newusername', array('label' => 'Change Email','placeholder'=>'Email','type'=>'email'));
    ?>
          <hr/>
          <h6><b> Upload your profile picture </b></h6>
          <div class="row">
          <?php echo $this->Form->input('path',array('type'=>'file','label'=>false,'id'=>'imgInp'));?>
            <div id="profilePic" class="columns large-9">
               <?php
              if(empty($activeUser['User']['path'])){
                    echo $this->Html->image('user_avatar.png',array('id'=>'blah','class'=>'usr-img-preview'));
                    echo '<p>Click to change avtar</p>';
                }
                else{
                  echo '<img id="blah" src="'.$this->webroot.'files/user/path/'.$activeUser['User']['id'].'/'.$activeUser['User']['path'].'" class="usr-img-preview" />';
                  echo '<a id="removeDp" class="button tiny alert radius">Remove Photo</a>';
                  echo '<p>Click to change avtar</p>';
                }?>
            </div>
          </div>  
          <hr/>
          <div class="row">
          <div class="columns large-9">
          <?php
          echo $this->Form->input('Save Details',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'button tiny radius'));
          echo $this->Form->end();
          if($activeUser['User']['UserType']['name']=='Student'){
            echo $this->Html->link('Cancel',array('controller'=>'students','action'=>'home'),array('class'=>'button tiny secondary radius'));
          }
          else if($activeUser['User']['UserType']['name']=='Parent'){
            echo $this->Html->link('Cancel',array('controller'=>'parents','action'=>'home'),array('class'=>'button tiny secondary radius'));
          }
          else if($activeUser['User']['UserType']['name']=='Teacher'){
            echo $this->Html->link('Cancel',array('controller'=>'teachers','action'=>'home'),array('class'=>'button tiny secondary radius'));
          }
          else{
            echo $this->Html->link('Cancel',array('controller'=>'contributors','action'=>'index'),array('class'=>'button tiny secondary radius'));
          }
          ?>
          </div>
          </div>
  </div>
</div>