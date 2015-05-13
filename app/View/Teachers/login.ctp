<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h4 style="text-align:center">ઈ-વિદ્યાલય | વિદ્યાર્થી  લોગીન</h4>
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('Teacher',array('controller'=>'Teachers','action'=>'login')) ?>
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
                                            'class'=>'btn btn-lg btn-success btn-block'
                                        ));
                                ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <?php 
                    echo $this->Session->flash('success');
                    echo $this->Session->flash('error');
                    echo $this->Session->flash('auth', array('params'=>array('class'=>'alert alert-danger')));
                ?>
            </div>
        </div>
    </div>