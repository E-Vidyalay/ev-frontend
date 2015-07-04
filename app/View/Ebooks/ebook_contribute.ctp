<div class="row" >
            <div class="columns large-10 panel large-offset-1 medium-8 small-offset-1 small-10 medium-offset-2" style="background:#fff;padding:20px">
                <div class="large-6 large-offset-3">
                <h4 align="center">Please enter the following details</h4>
                <hr/>
            <?php echo $this->Form->create('Ebook', array('type'=>'file','controller'=>'Ebooks','action'=>'ebook_contribute','class' => 'main-form')); ?>
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
                    'class'=>'button tiny radius',
                    'label'=>'Please upload your contribution',
                    'style'=>'text-align:left;width:50%'
                    ));
                    echo $this->Form->input('contributed',array('type'=>'hidden','value'=>1));
                ?>
                <div class="clear"></div>
                <?php echo $this->Form->input('Contribute',array('type'=>'submit','div'=>false,'class'=>'button tiny radius','id'=>'register-submit','label'=>false)); ?>
                <div class="clear"></div>
                </form>
           </div>
         </div>
       </div>
