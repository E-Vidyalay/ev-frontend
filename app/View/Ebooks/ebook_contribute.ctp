<div class="row" >
            <div class="columns large-10 panel large-offset-1 medium-8 small-offset-1 small-10 medium-offset-2" style="background:#fff;padding:20px">
                <div class="large-6 large-offset-3">
                <h4 align="center">Enter the Contributor details</h4>
                <hr/>
            <?php echo $this->Form->create('Ebook', array('type'=>'file','controller'=>'Ebooks','action'=>'ebook_contribute','class' => 'main-form')); ?>
                <?php
                echo $this->Form->label('first_name', 'Name of the Contributor',array('div'=>false,'class'=>'address_label'));
                ?>
                <?php
                echo $this->Form->input('Contributorname', array('label' => false,'div'=>false,'placeholder'=>'Name','id'=>'register-name','class'=>'address_filed01','title'=>'First Name','required'));
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
                <hr/>
                <h5>Enter the E-book Details</h5>
                <div class="clear"></div>
                <?php
                echo $this->Form->input('name',array('type'=>'text','class'=>'form-control','required','label'=>'Book Title','placeholder'=>'Book name'));
                ?>
                <div class="clear"></div>
                <?php
                echo $this->Form->input('level_id',array('type'=>'select','class'=>'form-control','required','options'=>$level,'empty'=>'Select level/age group of the book'));
                ?>
                <div class="clear"></div>
                <?php echo $this->Form->input('sub_category_id',array('type'=>'select','class'=>'form-control','required','options'=>$sl,'empty'=>'Select book type','label'=>'Select book type')); ?>
                <div class="clear"></div>
                <?php
                    echo $this->Form->input('path',array(
                    'type'=>'file',
                    'class'=>'button tiny default radius',
                    'label'=>'Please upload your contribution'
                    ));
                ?>
                <div class="clear"></div>
                <?php echo $this->Form->input('Contribute',array('type'=>'submit','div'=>false,'class'=>'button tiny radius','id'=>'register-submit','label'=>false)); ?>
                <div class="clear"></div>
                </form>
           </div>
         </div>
       </div>
