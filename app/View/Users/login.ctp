 
 <div class="row">
 <div class="columns large-4 large-offset-4 large-centered medium-8 medium-centered medium-offset-2 small-12" style="background:#fff;padding:20px">
    <h3>ઇમેઇલ દ્વારા લૉગિન કરો (Log in with your email)</h3>
    <hr/>
    <?php
      echo $this->Form->create('User',array('controller'=>'users','action'=>'custom_login'));
      echo $this->Form->input('username',array('type'=>'email','required','placeholder'=>'Username','label'=>'ઇમેઇલ'));
      echo $this->Form->input('password',array('type'=>'password','required','placeholder'=>'Password','label'=>'પાસવર્ડ'));
      if($quiz!=null){
        echo $this->Form->input('quiz',array('type'=>'hidden','value'=>'yes'));
      }
      echo $this->Form->input('લૉગિન - Login',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'button button expanded tiny radius'));
      echo $this->Form->end();
      echo $this->Html->link('પાસવર્ડ ભૂલી ગયા ?',array('controller'=>'users','action'=>'forgot_password'));
      echo $this->Html->link('Not a Member? Register',array('controller'=>'users','action'=>'register'),array('class'=>'right'));
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
