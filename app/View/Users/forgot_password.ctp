<div class="row">
 <div class="columns large-4 large-offset-4 medium-8 medium-offset-2 small-8 small-offset-3" style="background:#fff;padding:20px">
		<h3> Forgot Password </h3>
		<hr/>
		<?php
			echo $this->Form->create('User',array('controller'=>'users','action'=>'forgot_password'));
			echo $this->Form->input('username',array(
				'placeholder'=>'Email',
				'label'=>false,
				'type'=>'email',
				'required'
			));
			echo $this->Form->input('Submit',array(
				'type'=>'submit',
				'div'=>false,
				'label'=>false,
				'class'=>'button expand small radius',
				'onclick' => '$("submit").disabled = true;'
			));
			echo $this->Form->end();
		?>
		</div>
</div>