
<br/>
<div class="row radius">
	<div class="columns large-2 latest-pane">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				// if(count($latest)>0){
				// 	foreach ($latest as $key => $value) {
				// 		echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$value['Ebook']['id']."/".$value['Ebook']['path']."'>".$value['Ebook']['name']." : ".$value['Literature']['name']." - ".$value['SubLiterature']['name']." ( ".$value['Level']['level_name'].")</a></li> ";
				// 	}	
				// }
				// else{
				// 	for($i=0;$i<2;$i++){
				// 		echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$latest[$i]['Ebook']['id']."/".$latest[$i]['Ebook']['path']."'>".$latest[$i]['Ebook']['name']." : ".$latest[$i]['Literature']['name']." - ".$latest[$i]['SubLiterature']['name']." ( ".$latest[$i]['Level']['level_name'].")</a></li> ";
				// 	}
				// }
				
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
						// echo "<tr>";
						// 	echo "<td>".$value['HobbylobbyPost']['title']."</td>";
						// 	echo "<td>".$value['Hobby']['name']."</td>";
						// 	$sb="";
						// 	if($value['SubHobby']['name']!="" || $value['SubHobby']['name']!=NULL){
						// 		$sb=$value['SubHobby']['name'];
						// 	}
						// 	else{
						// 		$sb="Not applicable";
						// 	}
						// 	echo "<td>".$sb."</td>";
						// 	echo "<td>";
						// 		echo "<a href='#' class='book-link watch_p' id='".$value['HobbylobbyPost']['id']."' >View post</a>";
						// 	echo "</td>";
						// echo "</tr>";
						echo "<div class='post-pane'>";
								echo "<div class='post-pane-heading'>";
									echo $value['HobbylobbyPost']['title'];
								echo "</div>";
								echo "<div class='post-pane-body'>";
									echo $value['HobbylobbyPost']['meta_description'];
								echo "</div>";
								echo "<div class='post-pane-heading'>";
									echo "<b>For </b>".$value['Level']['level_name'].", <b>By</b> ".$value['Admin']['name'];
									echo "<span class='right'><a href='#' class='watch_p read-link' id='".$value['HobbylobbyPost']['id']."'>Read more</a></span>";
								echo "</div>";
							echo "</div>";?>
						<!-- <div class="row">
					<div class="columns large-12 large-offset-0" style="background:#fff;padding:10px">
						<a class="watch_p" id="<?php echo $value['HobbylobbyPost']['id']; ?>"><h3 id="post_title"><?php echo $value['HobbylobbyPost']['title']; ?></h3></a>
						<hr/>
						<div style="text-align:justify" class="more">
							<?php echo $value['HobbylobbyPost']['meta_description']; ?>
						</div>
					</div>
			</div> -->
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
