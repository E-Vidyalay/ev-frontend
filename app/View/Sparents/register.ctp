<div class="row">
	<div class="large-5 medium-6 small-8 colums medium-offset-3 small-offset-2 large-offset-4 panel">
		<h3 style="text-align:center"> નવા વાલી | નોંધણી </h3>
		<hr/>
		<?php
			echo $this->Form->create('Sparent',array('controller'=>'Sparents','action'=>'register'));
			echo $this->Form->input('first_name',array(
				'placeholder'=>'First Name',
				'label'=>false,
				'type'=>'text',
				'required'
			));
			echo $this->Form->input('last_name',array(
				'placeholder'=>'Last Name',
				'label'=>false,
				'type'=>'text',
				'required'
			));
			echo $this->Form->input('username',array(
				'placeholder'=>'Email',
				'label'=>false,
				'type'=>'email',
				'required'
			));
			echo $this->Form->input('password',array(
				'placeholder'=>'Password',
				'label'=>false,
				'type'=>'password',
				'required'
			));
			echo $this->Form->input('address',array(
				'placeholder'=>'Address',
				'label'=>false,
				'type'=>'textarea',
				'required'
			));
			echo $this->Form->input('mobile',array(
				'placeholder'=>'Mobile',
				'label'=>false,
				'type'=>'number',
				'required'
			));
			echo $this->Form->input('Register',array(
				'type'=>'submit',
				'div'=>false,
				'label'=>false,
				'class'=>'button expand small radius'
			));

			echo $this->Form->end();
		?>
	</div>
</div>