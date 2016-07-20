<div class="columns large-2 latest-pane hide-for-small hide-for-medium" style="position: fixed;">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<div class="list">
		<ul style="list-style:square;font-size:13px;">
			<?php
				if(count($latest)>0){
					for ($i=0;$i<sizeof($latest);$i++) {
						if($i<7){
							echo "<li style='padding-top:5px;'>";
							echo $this->Html->link($latest[$i]['InformationPost']['title'],array('controller'=>'InformationPosts','action'=>'view_post',$latest[$i]['InformationPost']['id']),array('escape' => false));
							echo "</li> ";
						}
					}	
				}
				else{
					for($i=0;$i<sizeof($posts);$i++){
						if($i<2){
							echo "<li style='padding-top:5px;'>";
							echo $this->Html->link($posts[$i]['InformationPost']['title'],array('controller'=>'InformationPosts','action'=>'view_post',$posts[$i]['InformationPost']['id']),array('escape' => false));
							echo "</li> ";
						}
					}
				}
				
			?>	
		</ul>
		</div>
	</div>