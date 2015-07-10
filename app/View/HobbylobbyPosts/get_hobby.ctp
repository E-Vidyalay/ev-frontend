
<div class="row cat-content">
	<div class="columns large-12">
		<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
			<?php
				if(isset($err)){
					echo $err;
				}
				else{
			?>
			<ul id='hobs' class='sb'>
				<?php
					foreach ($hobbys as $key => $value) {
						echo "<li><a id='".$value['Hobby']['id']."/".$lid."'>".$value['Hobby']['name']."</a></li>";
					}
				?>
			</ul>
			<?php }?>
		</div>
	</div>
</div>
