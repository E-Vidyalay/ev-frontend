<div class="row cat-content">
	<div class="columns large-12">
		<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
			<?php
				if(isset($err)){
					echo $err;
				}
				else{
			?>
			<ul id='subs' class='sb'>
				<?php
					foreach ($subjects as $key => $value) {
						echo "<li><a id='".$value['Subject']['id']."/".$value['level_id']."'>".$value['Subject']['name']."</a></li>";
					}
				?>
			</ul>
			<?php }?>
		</div>
	</div>
</div>
