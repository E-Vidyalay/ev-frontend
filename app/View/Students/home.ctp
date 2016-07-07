<div class="row">
	<div class="columns large-8 large-offset-0 medium-10 medium-offset-1 small-12 panel" style="background:#fff;">
		<h4>તમે આપેલ પ્રશ્નોતરી </h4>
		<hr/>
		<div class="row" style="border-bottom:1px dotted #bbb;padding:5px;margin-left:5px;margin-right:5px;">
			<div class="columns large-3 small-4" style="font-size:13px">
				<b>ધોરણ</b>
			</div>
			<div class="columns large-3 small-4" style="font-size:13px">
				<b>મુખ્ય વિષય</b>
			</div>
			<div class="columns large-3 small-4" style="font-size:13px">
				<b>તારીખ સમય</b>
			</div>
			<div class="columns large-3 small-6" style="font-size:13px">
			</div>
		</div>
		<?php
		if($test_history!=null){
			foreach ($test_history as $h) {
		?>
			<div class="row" style="border-bottom:1px dotted #bbb;padding:5px;margin-left:5px;margin-right:5px;">
				<div class="columns large-3 small-4" style="font-size:13px">
					<?php
					if($h['TestApplication']['standard_id']!=null){
						echo $h['Standard']['name'];
					}
					else{
						echo 'Without Standard';
					}
					 ?>
				</div>
				<div class="columns large-3 small-4" style="font-size:13px">
					<?php echo $h['Topic']['display_name']; ?>
				</div>
				<div class="columns large-3 small-4" style="font-size:13px">
					<?php 
					$date=date_create($h['TestApplication']['date']);
					echo date_format($date,"jS F Y h:i:s A"); ?>
				</div>
				<div class="columns large-3 small-6">
					<?php echo $this->Html->link('Get report',array('controller'=>'TestResults','action'=>'get_result',$h['TestApplication']['id']),array('class'=>'button info tiny round','style'=>'margin-top:10px')); ?>
				</div>
			</div>
		<?php
			}
		}
		else{
			?>
			<div class="row" style="border-bottom:1px dotted #bbb;padding:5px;margin-left:5px;margin-right:5px;">
			<h5>કોઈ ક્વિઝ હજુ સુધી આપવામાં આવી નથી</h5>
			</div>
			<?php
		}
		?>
	</div>
</div>