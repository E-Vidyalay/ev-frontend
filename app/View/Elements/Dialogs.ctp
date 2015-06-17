<script>(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));</script>
<div id="login" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<br/>
 <div class="login_dialouge_heading">Log in to Access more</div>
 <br/>
 <div class="row">
 <div class="columns large-6 panel">
    <?php
      echo $this->Form->create('User',array('controller'=>'users','action'=>'custom_login'));
      echo $this->Form->input('username',array('type'=>'email','required','placeholder'=>'Username','label'=>'Username'));
      echo $this->Form->input('password',array('type'=>'password','required','placeholder'=>'Password','label'=>'Password'));
      echo $this->Form->input('Login',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'button button tiny radius'));
      echo $this->Form->end();
      echo '<a href="#" data-reveal-id="forgot_password">Forgot Password ?</a>';
      // echo $this->Html->link('Forgot Password ?',array('controller'=>'users','action'=>'forgot_password'))
    ?>
</div>
 <div class="columns large-6">
     <div class=""><h4>Or Log in with</h4></div>
     <hr/>
    <?php 
    echo '<div class="facebookButton">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebok-square fa-fw')).' Log in with Facebook',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false)).'</div>';
    echo '<br/>';
    echo '<br/>';
    echo '<div id="GoogleBtn">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-googlePlus fa-fw')) .'  Log in with Google',array('controller'=>'auth','action'=>'google'),array('escape'=>false,'class'=>'buttonText')).'</div>'; ?>
</div>
</div>
<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>


<div id="register" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
 
        <br />
        <div class="login_dialouge_heading">Sign up and become member of our community</div>
        <div class="row">
            <br/>
            <div class="columns large-6 panel">
            <?php echo $this->Form->create('User', array('controller'=>'users','action'=>'signup','class' => 'main-form')); ?>
            <?php
                echo $this->Form->label('first_name', 'Full Name',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('name', array('label' => false,'div'=>false,'placeholder'=>'First name','id'=>'register-fname','class'=>'address_filed01','title'=>'First Name','required'));
                ?>
                <div class="clear"></div>
                <?php
                echo $this->Form->label('username', 'Email',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('username', array('label' => false,'div'=>false,'placeholder'=>'Your email address','id'=>'register-email','class'=>'address_filed01','title'=>'Email','required','type'=>'email'));
                ?>
                <?php
                echo $this->Form->label('password', 'Password',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('password', array('placeholder'=>'Min 6 characters','label' => false,'div'=>false,'id'=>'register-password','title'=>'Password','type'=>'password','required'));
                ?>
                <?php
                echo $this->Form->input('user_type', array('required','label' => false,'div'=>false,'options'=>$typeList,'label'=>'User Type'));
                ?>
                 <div class="checkbox">
                <?php
                echo $this->Form->checkbox('recv_news', array(
                    'value' => 1,
                    'hiddenField' => 0,
                    'default'=>1
                ));
                ?>
                <span class="checkbox-label">Sign me up for weekly newsletters.</span>
            </div>

        <!--         <div class="checkbox">
                    <?php
                    //echo $this->Form->checkbox('terms', array('value' => 1,'hiddenField' => 0,'default'=>1,'class'=>'register-terms'));
                    ?>
                    <span class="checkbox-label">I agree to the <?php  //echo $this->Html->link('terms & conditions',array('controller'=>'pages','action'=>'terms_and_conditions'),array('class'=>'content-link register-terms-link','target'=>'_blank')) ?>.</span>
                </div> -->

                <?php echo $this->Form->input('Sign Up',array('type'=>'submit','div'=>false,'class'=>'button tiny radius','id'=>'register-submit','label'=>false)); ?>
                <div class="clear"></div>
                </form>
            </div>


       <div class="columns large-6">
             <div class=""><h4>Or Sign up with</h4></div>
             <hr/>
            <?php 
            echo '<div class="facebookButton">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebok-square fa-fw')).' Sign up with Facebook',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false)).'</div>';
            echo '<br/>';
            echo '<br/>';
            echo '<div id="GoogleBtn">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-googlePlus fa-fw')) .'  Sign up with Google',array('controller'=>'auth','action'=>'google'),array('escape'=>false,'class'=>'buttonText')).'</div>'; ?>
               </div>
        </div>
        
       
    <a class="close-reveal-modal" aria-label="Close">&#215;</a> </div>
</div>

<div id="forgot_password" class="reveal-modal center" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog" align="center">
<br/>
 <div class="login_dialouge_heading" align="left">Forgot Password</div>
 <br/>
 <div class="large-6 panel">
    <?php
      echo $this->Form->create('User',array('controller'=>'users','action'=>'forgot_password'));
      echo $this->Form->label('username', 'Email',array('div'=>false,'class'=>'address_label'));
      echo $this->Form->input('username',array(
        'placeholder'=>'Enter Your Email',
        'label'=>false,
        'type'=>'email',
        'required'
      ));
      echo $this->Form->input('Submit',array(
        'type'=>'submit',
        'div'=>false,
        'label'=>false,
        'class'=>'button expand small radius',
        'onclick' => '$("submit").disabled = true;'
      ));
      echo $this->Form->end();
    ?>
</div>
<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
