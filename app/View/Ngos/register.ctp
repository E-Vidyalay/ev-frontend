
<div class="row" >
            
            <div class="columns large-6 panel large-offset-3 medium-8 small-offset-1 small-10 medium-offset-2" style="background:#fff;padding:20px">
                <h4 align="center">NGO Sign up</h4>
                <hr/>
                <blockquote>
                    <p>તમારા એનજીઓ evidyalay હેઠળ સાઇન અપ કરવા માંગે છે, તો પછી તમે નીચેની વિગતો ભરી શકો છો</p>
                </blockquote>
            <?php echo $this->Form->create('Ngo', array('type'=>'file','controller'=>'NGOs','action'=>'register','class' => 'main-form')); ?>
                <?php
                echo $this->Form->label('first_name', 'Name',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('name', array('label' => false,'div'=>false,'placeholder'=>'Name','id'=>'register-name','class'=>'address_filed01','title'=>'First Name','required'));
                ?>
                <div class="clear"></div>
                <?php
                echo $this->Form->label('description', 'Description',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('description', array('label' => false,'div'=>false,'placeholder'=>'Description','id'=>'register-desc','class'=>'address_filed01','title'=>'Description','required', 'type'=>'textarea'));
                ?>
                <div class="clear"></div>
                
                <?php
                echo $this->Form->label('address', 'Address',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('address', array('label' => false,'div'=>false,'placeholder'=>'Address','id'=>'register-add','class'=>'address_filed01','title'=>'Address','required'));
                ?>
                
                <div class="clear"></div>

                <?php
                echo $this->Form->label('contact_number', 'Contact Number',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('contact_number', array('label' => false,'div'=>false,'placeholder'=>'Contact Number','id'=>'register-num','class'=>'address_filed01','title'=>'Contact Number','required'));
                ?>

                <div class="clear"></div>

                <?php
                echo $this->Form->label('email', 'Email',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('email', array('label' => false,'div'=>false,'placeholder'=>'Your email address','id'=>'register-email','class'=>'address_filed01','title'=>'Email','required','type'=>'email'));
                ?>

                <?php
                echo $this->Form->label('site_url', 'Website',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('site_url', array('label' => false,'div'=>false,'placeholder'=>'E.g http://www.xyz.com','id'=>'register-url','class'=>'address_filed01','title'=>'Website URL','required', 'type'=>'url'));
                ?>
                
                <div class="clear"></div>

                <?php
                    echo $this->Form->input('path',array(
                    'type'=>'file',
                    'class'=>'button tiny default radius',
                    'label'=>'Please select a Prospectus'
                    ));
                ?>

                <div class="clear"></div>

        <!--         <div class="checkbox">
                    <?php
                    //echo $this->Form->checkbox('terms', array('value' => 1,'hiddenField' => 0,'default'=>1,'class'=>'register-terms'));
                    ?>
                    <span class="checkbox-label">I agree to the <?php  //echo $this->Html->link('terms & conditions',array('controller'=>'pages','action'=>'terms_and_conditions'),array('class'=>'content-link register-terms-link','target'=>'_blank')) ?>.</span>
                </div> -->

                <?php echo $this->Form->input('Sign Up',array('type'=>'submit','div'=>false,'class'=>'button tiny radius','id'=>'register-submit','label'=>false)); ?>
                <div class="clear"></div>
                </form> 
             <hr/>
            <?php /* 
            echo '<div class="facebookButton">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-facebok-square fa-fw')).' Sign up with Facebook',array('controller'=>'auth','action'=>'facebook'),array('escape'=>false)).'</div>';
            echo '<br/>';
            echo '<br/>';
            echo '<div id="GoogleBtn">'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-googlePlus fa-fw')) .'  Sign up with Google',array('controller'=>'auth','action'=>'google'),array('escape'=>false,'class'=>'buttonText')).'</div>'; */?>
       </div>
            </div>