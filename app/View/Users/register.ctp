
<div class="row">
            <h4 align="center">Register</h4>
            <div class="columns large-6 panel medium-8 small-offset-2 small-8 medium-offset-2">
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
                 <div><h4>Or Login with Social Apps</h4></div>
             <hr/>
            <?php 
            echo '<div class="facebook_button">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebook-square fa-fw')).' Sign in with Facebook',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false)).'</div>';
            echo '<br/>';
            echo '<br/>';
            echo '<div id="GoogleBtn">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-google-plus fa-fw')) .'  Sign in with Google',array('controller'=>'auth','action'=>'google'),array('escape'=>false,'class'=>'buttonText')).'</div>'; ?>
       </div>
            </div>