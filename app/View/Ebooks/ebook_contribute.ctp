<div class="row" >
            <div class="columns large-8 panel large-offset-2 medium-8 small-offset-1 small-10 medium-offset-2" style="background:#fff;padding:20px">
                <h4 align="center">ઇબુક દાન કરવા માટે નીચે ની વિગતો પૂરો </h4>
                <hr/>
            <?php echo $this->Form->create('Ebook', array('type'=>'file','controller'=>'Ebooks','action'=>'ebook_contribute','class' => 'main-form')); ?>
                <?php
                echo $this->Form->input('name',array('type'=>'text','class'=>'form-control','required','label'=>'Book Title ( ઇબુક નામ )','placeholder'=>'Book Title ( ઇબુક નામ )'));
                ?>
                <div class="clear"></div>
                <?php
                echo $this->Form->input('author',array('type'=>'text','class'=>'form-control','required','label'=>'Author ( લેખક )','placeholder'=>'Author Name ( લેખક નામ )'));
                ?>
                <div class="clear"></div>
                <?php
                echo $this->Form->input('compiler',array('type'=>'text','class'=>'form-control','required','label'=>'Compiled by ( સંકલન )','placeholder'=>'Comiled by ( સંકલન )'));
                ?>
                <div class="clear"></div>
                <label>Is Translation available in E-book? (ઇંગલિશ અનુવાદ ઇબુકમાં ઉપલબ્ધ છે?)</label>
                <?php 
                    echo $this->Form->input('with_translation', array(
                        'options' => array('NO', 'YES'),
                        'type' => 'radio',
                        'class'=>'radio-inline',
                        'label'=>'Is Translation available in E-book?'
                    ));
                ?>
                <div class="clear"></div>
                <label>Are Pictures available in E-book? (ચિત્રો ઇબુકમાં ઉપલબ્ધ છે?)</label>
                <?php 
                    echo $this->Form->input('with_picture', array(
                        'options' => array('NO', 'YES'),
                        'type' => 'radio',
                        'class'=>'radio-inline',
                        'label'=>'Are Pictures available in E-book?'
                    ));
                ?>
                <div class="clear"></div>
                <?php
                echo $this->Form->input('level_id',array('type'=>'select','class'=>'form-control','required','options'=>$level,'empty'=>'Select level/age group of the book'));
                ?>
                <div class="clear"></div>
                <?php echo $this->Form->input('sub_category_id',array('type'=>'select','class'=>'form-control','required','options'=>$sl,'empty'=>'Select ઇબુક સાહિત્ય પ્રકાર','label'=>'Select book type (Select ઇબુક સાહિત્ય પ્રકાર)')); ?>
                <div class="clear"></div>
                <?php
                    echo $this->Form->input('path',array(
                    'type'=>'file',
                    'class'=>'button tiny radius',
                    'label'=>'Please upload your contribution',
                    'style'=>'text-align:left;width:50%',
                    'accept'=>'image/*',
                    'capture'=>'camera'
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
