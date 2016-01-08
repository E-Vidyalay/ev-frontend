<div class="row" id="sub-topics">
	<div class="columns large-2">
		<ul class="subtopics-li">
			<?php
				foreach ($links as $key => $value) {
					$dn="";
					if($key==''){
						$dn="General";
					}
					else{
						$dn=$value[0]['SubTopic']['name'];
					}
					echo "<li>";
						echo "<a href=>".$dn."</a>";
						echo "<ul>";
							foreach ($value as $v) {
								echo "<li>".$v['Link']['link_title']."</li>";
							}
						echo "</ul>";
					echo "</li>";
				}
			?>
		</ul>
	</div>
</div>