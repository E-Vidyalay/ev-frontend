<div class="row">
  <div class="columns large-4 large-offset-4 medium-8 medium-offset-2 small-8 small-offset-3" style="background:#fff;padding:20px">
    <h3> Edit Profile </h3>
    <hr/>
    <?php
      echo $this->Form->create('User',array('type'=>'file','controller'=>'users','action'=>'edit_profile'));
      echo $this->Form->input('id',array('type'=>'hidden'));
      echo $this->Form->input('name',array('type'=>'text','required','placeholder'=>'Name','label'=>'Name'));
      // echo $this->Form->input('password',array('type'=>'password','placeholder'=>'Old Password','label'=>'Old Password'));
      echo $this->Form->input('newpassword',array('type'=>'password','placeholder'=>'New Password','label'=>'New Password'));
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
                }
                else{
                  echo '<img id="blah" src="'.$this->webroot.'files/user/path/'.$activeUser['User']['id'].'/'.$activeUser['User']['path'].'" class="usr-img-preview" />';
                  echo '<a id="removeDp" class="button tiny alert radius">Remove Photo</a>';
                }?>
            </div>
          </div>  
          <hr/>
          <div class="row">
          <div class="columns large-9">
          <?php
          echo $this->Form->input('Save Details',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'button tiny radius'));
          echo $this->Html->link('Cancel',array('controller'=>'students','action'=>'home'),array('class'=>'button tiny secondary radius'));
          echo $this->Form->end();
          ?>
          </div>
          </div>
  </div>
</div>