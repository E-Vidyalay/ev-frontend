<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
	<?php echo "<a href='#' style='font-size:13px;padding:2px' class='topic_fetch' id='".$subject['Subject']['id']."/".$subject['Topic']['level_id']."'>".$subject['Subject']['name']."</a> / <a href='#' style='font-size:13px'>".$subject['Topic']['name']."</a>";
	 ?>
</div>
<div class="row">
	<?php
	?>
		<div class="columns large-3">
			<div class="ev-box">
			<div class="ev-box-head">
				<?php echo $subject['Topic']['name'];?>

			</div>
			<ul id='subl-vi'>
				<?php if(count($subs)>0){
					foreach ($subs as $st) {
							echo "<li><a href='#' id='".$st['SubTopic']['id']."'><i class='fa fa-arrow-circle-right'></i>&nbsp;&nbsp;&nbsp;".$st['SubTopic']['name']."</a></li>";
						
					}
					}
					echo "<br/>";
					echo "<div style='text-ailgn:center'>Click <a class='no-sb' id='".$subject['Topic']['id']."' href='#'>here</a> to watch videos on ".$subject['Topic']['name']."</div>";
				?>

			</ul>
			</div>
		</div>
	<br/>
</div>