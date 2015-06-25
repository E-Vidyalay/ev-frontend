
<br/>
<div class="row radius">
	<div class="columns large-2 latest-pane hide-for-small hide-for-medium">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				if(count($latest)>0){
					foreach ($latest as $key => $value) {
						echo "<li style='padding-top:5px;'><a class='watch_i' id='".$value['InformationPost']['id']."'>".$value['InformationPost']['title']."</a></li> ";
					}	
				}
				else{
					for($i=0;$i<2;$i++){
						echo "<li style='padding-top:5px;'><a class='watch_i' id='".$latest[$i]['InformationPost']['id']."'>".$latest[$i]['InformationPost']['title']."</a></li> ";
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
				<div class="row"><div class="columns large-8 large-offset-2">
				<?php
					foreach ($posts as $key => $value) {
						echo "<div class='post-pane'>";
								echo "<div class='post-pane-heading'>";
									echo $value['InformationPost']['title'];
								echo "</div>";
								echo "<div class='post-pane-body'>";
									echo $value['InformationPost']['meta_description'];
								echo "</div>";
								echo "<div class='post-pane-heading'>";
									echo " <b>By</b> ".$value['Admin']['name'];
									echo "<span class='right'><a class='watch_i read-link ' id='".$value['InformationPost']['id']."'>Read more</a></span>";
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
