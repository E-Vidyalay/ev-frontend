<div class="row">
    <div class="large-5 medium-6 small-8 colums medium-offset-3 small-offset-2 large-offset-4 panel">
                        <h3 style="text-align:center">ઈ-વિદ્યાલય | વિદ્યાર્થી  લોગીન</h3>
                        <hr/>
                        <?php echo $this->Form->create('Student',array('controller'=>'Students','action'=>'login')) ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $this->Form->input('username',array(
                                            'class'=>'form-control',
                                            'placeholder'=>'ઈ-મેલ',
                                            'type'=>'email',
                                            'required',
                                            'autofocus',
                                            'label'=>false
                                        ));
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->input('password',array(
                                            'class'=>'form-control',
                                            'placeholder'=>'પાસવર્ડ',
                                            'type'=>'password',
                                            'required',
                                            'autofocus',
                                            'label'=>false
                                        ));
                                    ?>
                                </div>
                                <?php
                                    echo $this->Form->input('લોગીન',array(
                                            'type'=>'submit',
                                            'div'=>false,
                                            'label'=>false,
                                            'class'=>'button expand small radius',
                                            'style'=>'font-size: 15pt'
                                        ));
                                ?>
                            </fieldset>
                        </form>
                        <?php 
                    echo $this->Session->flash('success');
                    echo $this->Session->flash('error');
                    echo $this->Session->flash('auth', array('params'=>array('class'=>'alert alert-danger')));
                ?>
                    </div>
                    
                </div>
                