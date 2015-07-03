<div class="row radius">
<br class="hide-for-small hide-for-medium" />
<br class="hide-for-small hide-for-medium" />
	<div class="columns large-2 latest-pane hide-for-small hide-for-medium" style="position: fixed;width: 200px;">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				if(count($latest)>0){
					foreach ($latest as $key => $value) {
						if($value['SubTopic']['id']!=NULL){
						echo "<li style='padding-top:5px;'><a class='watch_v' id='".$value['Link']['id']."'>".$value['Link']['link_title']." : ".$value['Topic']['display_name']." - ".$value['SubTopic']['name']."</a></li> ";
						}else{
							echo "<li style='padding-top:5px;'><a class='watch_v' id='".$value['Link']['id']."'>".$value['Link']['link_title']." : ".$value['Topic']['display_name']."</a></li> ";
						}
					}
				}
				else{
					for($i=0;$i<sizeof($videos);$i++){
						if($i<2){
						if($videos[$i]['SubTopic']['id']!=NULL){
						echo "<li style='padding-top:5px;'><a class='watch_v' id='".$videos[$i]['Link']['id']."'>".$videos[$i]['Link']['link_title']." : ".$videos[$i]['Topic']['display_name']." - ".$videos[$i]['SubTopic']['name']."</a></li> ";
						}else{
							echo "<li style='padding-top:5px;'><a class='watch_v' id='".$videos[$i]['Link']['id']."'>".$videos[$i]['Link']['link_title']." : ".$videos[$i]['Topic']['display_name']."</a></li> ";
						}
						}
					}
				}

			?>
		</ul>
	</div>
	<div class="columns large-10" style="background: #fff;">
	<h3 id="post-head">વિડીયો લાઇબ્રેરી</h3>
		<div class="row">
			<div class="columns large-9 hide-for-small hide-for-medium">
				<ul class="vi-menu vi">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
				</ul>
			</div>
			<div class="columns large-3 hide-for-small hide-for-medium">
				<li class='has-sub-menu-lit right lit-cat' style="font-size:13px">
				  <?php
				  	echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa')) . " View all",array('controller'=>'Links','action'=>'index'),array('escape' => false));
				  ?>


	            </li>
			</div>
			<div class="columns large-9 hide-for-large-up">
				<ul class="vi-menu vi">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
					<li class='has-sub-menu-lit lit-cat' style="font-size:13px">
				  <?php
				  	echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa')) . " View all",array('controller'=>'Links','action'=>'index'),array('escape' => false));
				  ?>
	            </li>
				</ul>
			</div>
		</div>
		<div id="sub_lit">
		<div class="row">
			<div class="columns large-12" id="vi-cont">
			<table id="example" class="display responsive" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		            <th>Video Name</th>
		            <th>Category</th>
		            <th>Sub-Category</th>
		            <th>Action</th>
		        </tr>
		    </thead>
			<tbody>
				<?php
					foreach ($videos as $key => $value) {
						echo "<tr>";
							echo "<td>".$value['Link']['link_title']."</td>";
							echo "<td>".$value['Topic']['name']."</td>";
							$sb="";
							if($value['SubTopic']['name']!="" || $value['SubTopic']['name']!=NULL){
								$sb=$value['SubTopic']['name'];
							}
							else{
								$sb="Not applicable";
							}
							echo "<td>".$sb."</td>";
							echo "<td>";
								echo "<a href='#' class='book-link watch_v' id='".$value['Link']['id']."' >View video</a>";
									echo '<a href="#" class="book-desc" data-reveal-id="md-'.$value['Link']['id'].'">Read video description</a>

									<div id="md-'.$value['Link']['id'].'" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
									 <br/>
									 <h4>Video Description</h4>
									 <hr/>
									 	<div class="book-d radius">
									 		'.$value['Link']['tags'].'
									 	</div>
									  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
									</div>';
							echo "</td>";
						echo "</tr>";
					}

				?>
			</tbody>
			</table>
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
