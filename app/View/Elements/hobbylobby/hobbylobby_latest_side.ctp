<div class="columns large-2 latest-pane hide-for-small hide-for-medium" style="position: fixed;width: 200px;">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<div class="list">
		<ul style="list-style:square;font-size:13px;">
			<?php
				if(count($latest)>0){
					for ($i=0;$i<sizeof($latest);$i++) {
						if($i<7){
						echo "<li style='padding-top:5px;'>";
						echo $this->Html->link($latest[$i]['HobbylobbyPost']['title'].' : '.$latest[$i]['Hobby']['name'].' - '.$latest[$i]['SubHobby']['name'].' ( '.$latest[$i]['Level']['level_name'].')',array('controller'=>'HobbylobbyPosts','action'=>'view_post',$latest[$i]['HobbylobbyPost']['id']),array('escape' => false));
						echo "</li> ";
						}
					}
				}
				else if(count($posts)>=2){
					for($i=0;$i<sizeof($posts);$i++){
						if($i<2){
							echo "<li style='padding-top:5px;'>";
						echo $this->Html->link($posts[$i]['HobbylobbyPost']['title']." : ".$posts[$i]['Hobby']['name']." - ".$posts[$i]['SubHobby']['name']." ( ".$posts[$i]['Level']['level_name'].")",array('controller'=>'HobbylobbyPosts','action'=>'view_post',$posts[$i]['HobbylobbyPost']['id']),array('escape' => false));
						echo "</li> ";
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