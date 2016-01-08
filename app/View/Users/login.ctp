 
 <div class="row">
 <div class="columns large-4 large-offset-4 medium-8 medium-offset-2 small-10 small-offset-1" style="background:#fff;padding:20px">
    <h3> Log in </h3>
    <hr/>
    <?php
      echo $this->Form->create('User',array('controller'=>'users','action'=>'custom_login'));
      echo $this->Form->input('username',array('type'=>'email','required','placeholder'=>'Username','label'=>'Username'));
      echo $this->Form->input('password',array('type'=>'password','required','placeholder'=>'Password','label'=>'Password'));
      echo $this->Form->input('Login',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'button button tiny radius'));
      echo $this->Form->end();
      echo $this->Html->link('Forgot Password ?',array('controller'=>'users','action'=>'forgot_password'));
    ?>
      <hr/>
    <div><h4>Or Log in with</h4></div>
     <hr/>
  <div id="gSignInWrapper">
    
    <?php 
    echo '<div class="facebookButton">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebok-square fa-fw')).' Log in with Facebook',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false)).'</div>';
    echo '<br/><br/>';
    echo '<div id="GoogleBtn">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-googlePlus fa-fw')) .'  Log in with Google',array('controller'=>'auth','action'=>'google'),array('escape'=>false,'class'=>'buttonText')).'</div>'; ?>
</div>
</div>
  </div>
