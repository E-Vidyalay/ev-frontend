 
 <div class="row">
 <div class="columns large-4 large-offset-4" style="background:#fff;padding:20px">
    <h3> Login </h3>
    <hr/>
    <?php
      echo $this->Form->create('User',array('controller'=>'users','action'=>'custom_login'));
      echo $this->Form->input('username',array('type'=>'email','required','placeholder'=>'username','label'=>'Username'));
      echo $this->Form->input('password',array('type'=>'password','required','placeholder'=>'Password','label'=>'Password'));
      echo $this->Form->input('Login',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'button button tiny radius'));
      echo $this->Form->end();

    ?>

     <hr/>
    <?php 
    echo $this->Html->link('<div class="log_in_box_with_social">'.$this->Html->image('facebook_log_in.png').'</div>',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false));
    echo $this->Html->link('<div class="log_in_box_with_social">'.$this->Html->image('google_plus.png').'</div>',array('controller'=>'auth','action'=>'google'),array('escape'=>false)); ?>
</div>
</div>