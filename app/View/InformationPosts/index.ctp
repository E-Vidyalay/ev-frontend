<div class="row radius">
	<div class="columns large-2 latest-pane hide-for-small hide-for-medium" style="position: fixed;width: 200px;">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				if(count($latest)>0){
					for ($i=0;$i<sizeof($latest);$i++) {
						if($i<7){
						echo "<li style='padding-top:5px;'><a class='watch_i' id='".$latest[$i]['InformationPost']['id']."'>".$latest[$i]['InformationPost']['title']."</a></li> ";
						}
					}	
				}
				else{
					for($i=0;$i<sizeof($posts);$i++){
						if($i<2){
						echo "<li style='padding-top:5px;'><a class='watch_i' id='".$posts[$i]['InformationPost']['id']."'>".$posts[$i]['InformationPost']['title']."</a></li> ";
						}
					}
				}
				
			?>	
		</ul>
	</div>
	<div class="columns large-10" style="background: #fff;">
		<div class="row">
			<div class="columns large-9 hide-for-small hide-for-medium">
				<ul class="vi-menu hl">
					
				</ul>
			</div>
			<div class="columns large-3 hide-for-small hide-for-medium">
				<li class='has-sub-menu-lit right lit-cat' style="font-size:13px">
				  <?php
				  	echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa')) . " View all",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false));
				  ?>
	   
	              
	            </li>
			</div>
			<div class="columns large-9 hide-for-large-up">
				<ul class="vi-menu hl">
					
					<li class='has-sub-menu-lit lit-cat' style="font-size:13px">
					  <?php
					  	echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa')) . " View all",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false));
					  ?>
	   
	              
	            </li>
				</ul>
			</div>
		</div>
		
		<div id="sub_lit">
		
		<div class="row">
			<div class="columns large-12" id="vi-cont">
				<div class="row"><div class="columns large-8">
				<?php
					foreach ($posts as $key => $value) {
						$date=date('M j Y',strtotime($value['InformationPost']['updated_at']));
						echo "<div class='post-pane'>";
								echo "<div class='post-pane-heading'>";
									echo $value['InformationPost']['title'];
								echo "</div>";
								echo "<div class='post-pane-body'>";
									echo $value['InformationPost']['meta_description'];
								echo "</div>";
								echo "<div class='post-pane-heading'>";
									echo '<ul class="postBylist">';
									echo '<li class="listitem"><i class="fa fa-calendar fa-fw"></i>'.$date.'</li>';
									echo "<li class='listitem'><b>By</b> ".$value['Admin']['name']."</li>";
									echo "<span class='right'><a class='watch_i read-link ' id='".$value['InformationPost']['id']."'>Read more</a></span>";
									echo '</ul>';
								echo "</div>";
							echo "</div>";?>
						<?php
					}
					
				?> 
				</div></div>
			</div>
		</div>
		<div class="loading">
			<i class="fa fa-spinner fa-spin fa-3x"></i>
		</div>
		</div>
	</div>
</div>
