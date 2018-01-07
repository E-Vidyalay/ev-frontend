<div class="row">
 <div class="columns large-4 large-offset-4 medium-8 medium-offset-2 small-10 small-offset-1" style="background:#fff;padding:20px">
		<h3> પાસવર્ડ ભૂલી ગયા છો </h3>
		<hr/>
		<blockquote>
            <p>તમારા વપરાશકર્તા ઇમેઇલ દાખલ કરો. તમને તમારા નોંધાયેલાં ઇમેઇલ પર એક નવો પાસવર્ડ પ્રાપ્ત થશે.</p>
        </blockquote>
		<?php
			echo $this->Form->create('User',array('controller'=>'users','url'=>'forgot_password'));
			echo $this->Form->input('username',array(
				'placeholder'=>'Enter Your Email',
				'label'=>'ઇમેઇલ',
				'type'=>'email',
				'required'
			));
			echo $this->Form->input('પાસવર્ડ ભૂલી ગયા',array(
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