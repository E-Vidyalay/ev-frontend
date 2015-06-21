
<br/>
<div class="row radius">
	<div class="columns large-2 latest-pane">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				if(count($latest)>0){
					foreach ($latest as $key => $value) {
						echo "<li style='padding-top:5px;'><a class='watch_p' id='".$value['HobbylobbyPost']['id']."'>".$value['HobbylobbyPost']['title']." : ".$value['Hobby']['name']." - ".$value['SubHobby']['name']." ( ".$value['Level']['level_name'].")</a></li> ";
					}	
				}
				else{
					for($i=0;$i<2;$i++){
						echo "<li style='padding-top:5px;'><a class='watch_p' id='".$latest[$i]['LiteraturePost']['id']."'>".$latest[$i]['LiteraturePost']['title']." : ".$latest[$i]['Literature']['name']." - ".$latest[$i]['SubLiterature']['name']." ( ".$latest[$i]['Level']['level_name'].")</a></li> ";
					}
				}
				
			?>	
		</ul>
	</div>
	<div class="columns large-10" style="background: #fff;">
		<div class="row">
			<div class="columns large-9">
				<ul class="vi-menu hl">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
				</ul>
			</div>
			<div class="columns large-3">
				<li class='has-sub-menu-lit right lit-cat' style="font-size:13px">
				  <?php
				  	echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa')) . " View all",array('controller'=>'HobbylobbyPosts','action'=>'index'),array('escape' => false));
				  ?>
	   
	              
	            </li>
			</div>
		</div>
		
		<div id="sub_lit">
		
		<div class="row">
			<div class="columns large-12" id="vi-cont">
				<div class="row"><div class="columns large-8 large-offset-2">
				<?php
					foreach ($posts as $key => $value) {
						echo "<div class='post-pane'>";
								echo "<div class='post-pane-heading'>";
									echo $value['HobbylobbyPost']['title'];
								echo "</div>";
								echo "<div class='post-pane-body'>";
									echo $value['HobbylobbyPost']['meta_description'];
								echo "</div>";
								echo "<div class='post-pane-heading'>";
									echo "<b>For </b>".$value['Level']['level_name'].", <b>By</b> ".$value['Admin']['name'];
									echo "<span class='right'><a class='watch_p read-link' id='".$value['HobbylobbyPost']['id']."'>Read more</a></span>";
								echo "</div>";
							echo "</div>";?>
						<?php
					}
					
				?> 
				</div></div>
			</div>
		</div>
		<div class="loading">
			<?php
				echo $this->Html->image('loader.gif');
			?>
		</div>
		</div>
	</div>
</div>
