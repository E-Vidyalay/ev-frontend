
<div class="row" style="z-index:-500">
<div class="columns large-6 large-offset-3">
<?php
echo $this->Form->create('TestResult',array('controller'=>'TestResults','action'=>'generate_result'));
echo $this->Form->input('test_id',array('type'=>'hidden','value'=>$test_id));
$i=0;
foreach ($questions as $question) {?>
<div class="question-card">
	<div class="question-panel">
		<?php
			echo "<b>".$question['QuestionBank']['question']."</b>";			
		?>
		<hr/>
	</div>
	<div class="opt">
	<?php echo $this->Form->input('Question.'.$i.'.ans.1',array('type'=>'checkbox','label'=>$question['QuestionBank']['option1'],'value'=>'option1','class'=>'opt-list','div'=>false)); ?>
	<?php echo $this->Form->input('Question.'.$i.'.ans.2',array('type'=>'checkbox','label'=>$question['QuestionBank']['option2'],'value'=>'option2','class'=>'opt-list','div'=>false)); ?>
	<?php echo $this->Form->input('Question.'.$i.'.ans.3',array('type'=>'checkbox','label'=>$question['QuestionBank']['option3'],'value'=>'option3','class'=>'opt-list','div'=>false)); ?>
	<?php echo $this->Form->input('Question.'.$i.'.ans.4',array('type'=>'checkbox','label'=>$question['QuestionBank']['option4'],'value'=>'option4','class'=>'opt-list','div'=>false)); ?>
	<?php echo $this->Form->input('Question.'.$i.'.ans.5',array('type'=>'checkbox','label'=>$question['QuestionBank']['option5'],'value'=>'option5','class'=>'opt-list','div'=>false)); ?>
	</div>

</div>
<?php echo $this->Form->input('Question.'.$i.'.question_id',array('type'=>'hidden','value'=>$question['QuestionBank']['id'])); ?>
<?php echo $this->Form->input('Question.'.$i.'.correct_ans',array('type'=>'hidden','value'=>$question['QuestionBank']['correct_ans'])); ?>
<?php $i++; } ?>
<?php
	echo $this->Form->input('Submit', array('type'=>'submit','class'=>'button success radius','label'=>false,'style'=>'margin-left:10px;'));
?>
</div>
</div>

