<br/>
<div class="row radius">
	<div class="columns large-2 latest-pane">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				// if(count($latest)>0){
				// 	foreach ($latest as $key => $value) {
				// 		echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/LiteraturePost/path/".$value['LiteraturePost']['id']."/".$value['LiteraturePost']['path']."'>".$value['LiteraturePost']['name']." : ".$value['Literature']['name']." - ".$value['SubLiterature']['name']." ( ".$value['Level']['level_name'].")</a></li> ";
				// 	}	
				// }
				// else{
				// 	for($i=0;$i<2;$i++){
				// 		echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/LiteraturePost/path/".$latest[$i]['LiteraturePost']['id']."/".$latest[$i]['LiteraturePost']['path']."'>".$latest[$i]['LiteraturePost']['name']." : ".$latest[$i]['Literature']['name']." - ".$latest[$i]['SubLiterature']['name']." ( ".$latest[$i]['Level']['level_name'].")</a></li> ";
				// 	}
				// }
				
			?>	
		</ul>
	</div>
	<div class="columns large-10" style="background: #fff;">
		<div class="row">
			<div class="columns large-9">
				<ul class="lt-menu">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
				</ul>
			</div>
			<div class="columns large-3">
				<li class='has-sub-menu-lit right lit-cat'>
	              <a style="font-size:14px">Select category &nbsp;<i class='fa fa-angle-down'> </i></a>
	              <ul class='sub-menu-lit'>
	               	<?php
	               		foreach($lit as $l){
	               			echo "<li><a id='".$l['Literature']['id']."'>".$l['Literature']['name']."</a></li>";
	               		}
	               	?>
	              </ul>
	            </li>
			</div>
		</div>
		<div id="sub_lit">
		<div class="row cat-content">
			<div class="columns large-12">
				<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
					<ul id='slit-list'>
						<?php
							foreach ($slit as $key => $value) {
								echo "<li><a id='".$value['SubLiterature']['id']."'>".$value['SubLiterature']['name']."</a></li>";
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="columns large-8 large-offset-2 post-content" id="li-LiteraturePosts">
				<?php
					if(count($posts)>0){
						foreach ($posts as $key => $value) {
							echo "<div class='post-pane'>";
								echo "<div class='post-pane-heading'>";
									echo $value['LiteraturePost']['title'];
								echo "</div>";
								echo "<div class='post-pane-body'>";
									echo $value['LiteraturePost']['meta_description'];
								echo "</div>";
								echo "<div class='post-pane-heading'>";
									echo "<b>For </b>".$value['Level']['level_name'].", <b>By</b> ".$value['Admin']['name'];
									echo "<span class='right'><a href='#' class='read-link get-lit-post' id='".$value['LiteraturePost']['id']."'>Read more</a></span>";
								echo "</div>";
							echo "</div>";	
						}
					}
					
				?>
			</div>
		</div>
		</div>
		<div class="loading">
			<?php
				echo $this->Html->image('loader.gif');
			?>
		</div>
	</div>
</div>
