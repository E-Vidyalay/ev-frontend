<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
	<?php echo "<a href='#' style='font-size:13px;padding:2px'>".$hobby['Hobby']['name']."</a>"; ?>
</div>
<div class="row">
	<div class="columns large-3">
			<div class="ev-box">
			<div class="ev-box-head">
				<?php echo 'Sub Hobby';?>

			</div>
	
		
			<ul id='subl-subhb'>
			<?php
			foreach ($subhobbys as $key => $value) {
				echo "<li><a href='#' id='".$value['SubHobby']['id']."/".$lid."'><i class='fa fa-arrow-circle-right'></i>&nbsp;&nbsp;&nbsp;".$value['SubHobby']['name']."</a></li>";
			}
			?>
			</ul>
			</div>

		</div>
	
	<br/>
</div>