<div class="columns large-2 latest-pane hide-for-small hide-for-medium" style="position: fixed;">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<div class="list">
		<ul>
			<?php
				if(count($latest)>0){
					for ($i=0;$i<sizeof($latest);$i++) {
						if($i<7){
						if($latest[$i]['SubTopic']['id']!=NULL){
						echo "<li style='padding-top:5px;'>";
						echo $this->Html->link($latest[$i]['Link']['link_title']." : ".$latest[$i]['Topic']['display_name']." - ".$latest[$i]['SubTopic']['name'],array('controller'=>'Links','action'=>'view_video',$latest[$i]['Link']['id']),array('escape' => false));
						echo "</li> ";
						}else{
							echo "<li style='padding-top:5px;'>";
							echo $this->Html->link($latest[$i]['Link']['link_title']." : ".$latest[$i]['Topic']['display_name'],array('controller'=>'Links','action'=>'view_video',$latest[$i]['Link']['id']),array('escape' => false));
							echo "</li> ";
						}
						}
					}
				}
				else if(count($videos)>=2){
					for($i=0;$i<sizeof($videos);$i++){
						if($i<2){
						if($videos[$i]['SubTopic']['id']!=NULL){
							echo "<li style='padding-top:5px;'>";
							echo $this->Html->link($videos[$i]['Link']['link_title']." : ".$videos[$i]['Topic']['display_name']." - ".$videos[$i]['SubTopic']['name'],array('controller'=>'Links','action'=>'view_video',$videos[$i]['Link']['id']),array('escape' => false));
							echo "</li> ";
						}else{
							echo "<li style='padding-top:5px;'>";
							echo $this->Html->link($videos[$i]['Link']['link_title']." : ".$videos[$i]['Topic']['display_name'],array('controller'=>'Links','action'=>'view_video',$videos[$i]['Link']['id']),array('escape' => false));
							echo "</li> ";
						}
						}
					}
				}
				else{
					echo "<a style='font-size:15px;color:#fff;cursor: default;'>કઈ નવું ઉપલબ્ધ નથી</a> ";
				}
			?>
		</ul>
		</div>
	</div>