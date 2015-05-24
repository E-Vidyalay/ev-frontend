<script>(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));</script>
<div id="login" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<br/>
 <div class="login_dialouge_heading">Login to access more features of the system</div>
 <br/>
 <div class="row">
 <div class="columns large-6 panel">
    <?php
      echo $this->Form->create('User',array('controller'=>'users','action'=>'custom_login'));
      echo $this->Form->input('username',array('type'=>'email','required','placeholder'=>'username','label'=>'Username'));
      echo $this->Form->input('password',array('type'=>'password','required','placeholder'=>'Password','label'=>'Password'));
      echo $this->Form->input('Login',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'button button tiny radius'));
      echo $this->Form->end();
    ?>
</div>
 <div class="columns large-6">
     <div class=""><h4>Or login with social apps</h4></div>
     <hr/>
    <?php 
    echo $this->Html->link('<div class="log_in_box_with_social">'.$this->Html->image('facebook_log_in.png').'</div>',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false));
    echo $this->Html->link('<div class="log_in_box_with_social">'.$this->Html->image('google_plus.png').'</div>',array('controller'=>'auth','action'=>'google'),array('escape'=>false)); ?>
</div>
</div>
<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>


<div id="register" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
 
        <br />
        <div class="login_dialouge_heading">Register and become member of our community</div>
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
             <div class=""><h4>Or login with social apps</h4></div>
             <hr/>
            <?php 
            echo $this->Html->link('<div class="log_in_box_with_social">'.$this->Html->image('facebook_log_in.png').'</div>',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false));
            echo $this->Html->link('<div class="log_in_box_with_social">'.$this->Html->image('google_plus.png').'</div>',array('controller'=>'auth','action'=>'google'),array('escape'=>false)); ?>
       </div>
        </div>
        
       
    <a class="close-reveal-modal" aria-label="Close">&#215;</a> </div>
</div>