
<div class="row" >
            
            <div class="columns large-6 panel large-offset-3 medium-8 small-10 small-offset-1 small-8 medium-offset-2" style="background:#fff;padding:20px">
                <h4 align="center">ઇમેઇલ સાથે સાઇનઅપ (Sign Up with Email)</h4>
                <hr/>
            <?php echo $this->Form->create('User', array('controller'=>'users','action'=>'signup','class' => 'main-form')); ?>
            <?php
                echo $this->Form->label('first_name', 'પૂરું નામ',array('div'=>false,'class'=>'address_label'));
                echo '<small>જરૂરી</small>';
                ?>
                <?php
                echo $this->Form->input('name', array('label' => false,'div'=>false,'placeholder'=>'First name','id'=>'register-fname','class'=>'address_filed01','title'=>'First Name','required'));
                ?>
                <div class="clear"></div>
                <?php
                echo $this->Form->label('username', 'ઇમેઇલ',array('div'=>false,'class'=>'address_label'));
                echo '<small>જરૂરી</small>';
                ?>
                <?php
                echo $this->Form->input('username', array('label' => false,'div'=>false,'placeholder'=>'Your email address','id'=>'register-email','class'=>'address_filed01','title'=>'Email','required','type'=>'email'));
                ?>
                <?php
                echo $this->Form->label('password', 'પાસવર્ડ',array('div'=>false,'class'=>'address_label'));
                echo '<small>જરૂરી</small>';
                ?>
                <?php
                echo $this->Form->input('password', array('placeholder'=>'Min 6 characters','label' => false,'div'=>false,'id'=>'register-password','title'=>'Password','type'=>'password','required'));
                ?>
                <?php
                echo $this->Form->input('user_type', array('required','label' => false,'div'=>false,'options'=>$typeList,'label'=>'વપરાશકર્તા પ્રકાર'));
                ?>
                 <div class="checkbox">
                <?php
                echo $this->Form->checkbox('recv_news', array(
                    'value' => 1,
                    'hiddenField' => 0,
                    'default'=>1
                ));
                ?>
                <span class="checkbox-label">Sign me up for weekly Newsletters.</span>
            </div>

        <!--         <div class="checkbox">
                    <?php
                    //echo $this->Form->checkbox('terms', array('value' => 1,'hiddenField' => 0,'default'=>1,'class'=>'register-terms'));
                    ?>
                    <span class="checkbox-label">I agree to the <?php  //echo $this->Html->link('terms & conditions',array('controller'=>'pages','action'=>'terms_and_conditions'),array('class'=>'content-link register-terms-link','target'=>'_blank')) ?>.</span>
                </div> -->

                <?php echo $this->Form->input('સાઇનઅપ - Sign Up',array('type'=>'submit','div'=>false,'class'=>'button tiny radius','id'=>'register-submit','label'=>false)); ?>
                <?php echo $this->Html->link('Already Member? Login here',array('controller'=>'users','action'=>'login'),array('div'=>false,'class'=>'right')); ?>
                <div class="clear"></div>
                </form>
                <hr/>
                 <div><h4>Or Sign up with</h4></div>
             <hr/>
            <?php 
            echo '<div class="facebookButton">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebok-square fa-fw')).' Sign up with Facebook',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false)).'</div>';
            echo '<br/>';
            echo '<br/>';
            echo '<div id="GoogleBtn">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-googlePlus fa-fw')) .'  Sign up with Google',array('controller'=>'auth','action'=>'google'),array('escape'=>false,'class'=>'buttonText')).'</div>'; ?>
       </div>
            </div>