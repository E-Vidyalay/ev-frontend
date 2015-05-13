<br/>
<br/>
<div class="row">
	<div class="large-5 medium-6 small-8 colums medium-offset-3 small-offset-2 large-offset-4 panel">
		<h3> New Student | Registration </h3>
		<hr/>
		<?php
			echo $this->Form->create('Student',array('controller'=>'Students','action'=>'register'));
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
			echo $this->Form->input('birthdate',array(
				'placeholder'=>'Date of birth',
				'label'=>false,
				'dateFormat'=>'DMY',
				'minYear'=>date('Y')-20,
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
			echo $this->Form->input('parent_email',array(
				'placeholder'=>'Parent Email',
				'label'=>false,
				'type'=>'email',
				'required'
			));
			echo $this->Form->input('mobile',array(
				'placeholder'=>'Mobile',
				'label'=>false,
				'type'=>'number',
				'required'
			));
			echo $this->Form->input('parent_mobile',array(
				'placeholder'=>'Parent Mobile',
				'label'=>false,
				'type'=>'number',
				'required'
			));
			echo $this->Form->input('school',array(
				'placeholder'=>'School Name',
				'label'=>false,
				'type'=>'text',
				'required'
			));
			echo $this->Form->input('address',array(
				'placeholder'=>'Address',
				'label'=>false,
				'type'=>'textarea',
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