<div class="row" >
            <div class="columns large-8 panel large-offset-2 medium-8 small-offset-1 small-10 medium-offset-2" style="background:#fff;padding:20px">
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
                <table cellpadding="3" cellspacing="0" border="1" class="editor">
                    <tr class="editortoolbar" >
                      <td ><div style="width:30% !important;" class="iconflex"> <select id="drpLanguage"
                    onchange="javascript:changeLanguage(this.options[this.selectedIndex].value);"
                    name="drpLanguage" title="Choose Language" class="big" style="width:100%">
                    <option value='pramukhindic:gujarati'>Gujarati</option>
                    <option value='pramukhindic:hindi'>Hindi</option>

                    <option value=":english" selected="selected">English (F9)</option>
                    </select></div>

                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php echo $this->Form->input('description',array('type'=>'textarea','id'=>'typingarea','class'=>'bigger','cols'=>'64','rows'=>'5','label'=>'Meta description'));?>
                            <!-- <textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea> -->
                      </td>
                    </tr>
                </table>
                <div class="clear"></div>
                <?php echo $this->Form->input('Contribute',array('type'=>'submit','div'=>false,'class'=>'button tiny radius','id'=>'register-submit','label'=>false)); ?>
                <div class="clear"></div>
                </form>
         </div>
       </div>
