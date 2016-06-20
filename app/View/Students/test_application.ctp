<div class="row">
	<div class="columns large-8 large-offset-2">
		<div class="content-card small-12 small-offset-0">
			<h3>ક્વિઝ આપો</h3>
		<h6>કૃપા કરીને વિષય પસંદ કરો કે જેના માટે તમે ક્વિઝ આપવા માંગો છો !</h6>
		<hr/>

			<?php
				echo $this->Form->create('TestApplication',array('controller'=>'TestApplications','action'=>'test_application'));
				echo $this->Form->input('student_id',array('type'=>'hidden','value'=>$student_id));
				echo $this->Form->input('topic_id',array('type'=>'select','options'=>$subjects,'required','label'=>'મુખ્ય વિષય','empty'=>'Select subject/topic','div'=>false));
				echo "<br/>";
				echo "<div class='text-center'>";
				echo $this->Form->button('આગળ વધો  <i class="fa fa-arrow-right"></i>',array('type'=>'submit','div'=>false,'label'=>false,'class'=>'button small radius'));
				echo "</div>";
			?>
		</form>
		</div>
	</div>
</div>
		