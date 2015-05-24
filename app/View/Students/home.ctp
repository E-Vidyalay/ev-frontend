<div class="row">
	<div class="columns large-4" style="background:#fff;padding: 10px 10px;">
		<h4>Your Quiz History </h4>
		<hr/>
		<?php
			foreach ($test_history as $h) {
		?>
			<div class="row" style="border-bottom:1px dotted #bbb;margin-left:10px;margin-right:10px;">
				<div class="columns large-4" style="padding-top:5px;font-size:13px">
					<?php echo $h['Subject']['display_name']; ?>
				</div>
				<div class="columns large-4" style="padding-top:5px;font-size:13px">
					<?php echo $h['TestApplication']['date']; ?>
				</div>
				<div class="columns large-4">
					<?php echo $this->Html->link('Get report',array('controller'=>'TestResults','action'=>'get_result',$h['TestApplication']['id']),array('class'=>'button info tiny round')); ?>
				</div>
			</div>
		<?php
			}
		?>
	</div>
</div>