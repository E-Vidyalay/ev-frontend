<div class="row">
	<div class="columns large-8 large-offset-2">
		<div class="content-card">
		<h6>Any specific sub-topic for which you would like to give test !</h6>
		<hr/>

			<?php
				echo $this->Form->create('TestApplication',array('controller'=>'TestApplications','action'=>'test_sbt_post'));
				echo $this->Form->input('uid',array('type'=>'hidden','value'=>$uid));
				echo $this->Form->input('student_id',array('type'=>'hidden','value'=>$student_id));
				echo $this->Form->input('topic_id',array('type'=>'hidden','value'=>$topic_id));
				echo $this->Form->input('sub_topic_id',array('type'=>'select','options'=>$sub_topics,'label'=>false,'empty'=>'Select subject/topic','div'=>false));
				echo "<br/>";
				echo $this->Form->input('Proceed',array('type'=>'submit','div'=>false,'label'=>false,'class'=>'button tiny radius'));
			?>
		</div>
	</div>
</div>
		