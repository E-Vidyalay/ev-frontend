<div class="row">
	<div class="columns large-8 large-offset-2">
		<div class="content-card">
		<h6>Please select subject for which you want to give quiz !</h6>
		<hr/>

			<?php
				echo $this->Form->create('TestApplication',array('controller'=>'TestApplications','action'=>'test_application'));
				echo $this->Form->input('uid',array('type'=>'hidden','value'=>$uid));
				echo $this->Form->input('student_id',array('type'=>'hidden','value'=>$student_id));
				echo $this->Form->input('subject_id',array('type'=>'radio','options'=>$subjects,'required'));
				echo "<br/>";
				echo $this->Form->input('Proceed',array('type'=>'submit','div'=>false,'label'=>false,'class'=>'button tiny radius'));
			?>
		</div>
	</div>
</div>
		