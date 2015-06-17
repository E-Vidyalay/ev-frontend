<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
	<?php echo "<a href='#' style='font-size:13px;padding:2px'>".$subject['Subject']['name']."</a>"; ?>
</div>
<div class="row">
	<?php
		foreach ($topics as $key => $value) {
	?>
		<div class="columns large-3">
			<div class="ev-box">
			<div class="ev-box-head">
				<?php echo $value['Topic']['name'];?>

			</div>
			<ul id='subl-vi'>
				<?php $count=0; 
					foreach ($subs as $st) {
						if($st['SubTopic']['topic_id']==$value['Topic']['id']){
							$count++;
							echo "<li><a href='#'><i class='fa fa-arrow-circle-right'></i>&nbsp;&nbsp;&nbsp;".$st['SubTopic']['name']."</a></li>";
						}
					}
				?>

			</ul>
			</div>
		</div>
	<?php
		}
	?>
	<br/>
</div>