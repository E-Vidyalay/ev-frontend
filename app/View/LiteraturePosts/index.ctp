<div class="row radius">
	<div class="columns large-2 latest-pane hide-for-small hide-for-medium" style="position: fixed;width: 200px;">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				if(count($latest)>0){
					for ($i=0;$i<sizeof($latest);$i++) {
						if($i<7){
						echo "<li style='padding-top:5px;'><a class='get-lit-post' id='".$latest[$i]['LiteraturePost']['id']."'>".$latest[$i]['LiteraturePost']['title']." : ".$latest[$i]['Literature']['name']." - ".$latest[$i]['SubLiterature']['name']." ( ".$latest[$i]['Level']['level_name'].")</a></li> ";
						}
					}
				}
				else if(count($posts)>=2){
					for($i=0;$i<sizeof($posts);$i++){
						if($i<2)
						echo "<li style='padding-top:5px;'><a class='get-lit-post' id='".$posts[$i]['LiteraturePost']['id']."'>".$posts[$i]['LiteraturePost']['title']." : ".$posts[$i]['Literature']['name']." - ".$posts[$i]['SubLiterature']['name']." ( ".$posts[$i]['Level']['level_name'].")</a></li> ";
					}
				}
				else{
					echo "<a style='font-size:15px;color:#fff;cursor: default;'>કઈ નવું ઉપલબ્ધ નથી</a> ";
				}

			?>
		</ul>
	</div>
	<div class="columns large-10" style="background: #fff;">
		<div class="row">
			<div class="columns large-9 hide-for-small hide-for-medium">
				<ul class="lt-menu">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
				</ul>
			</div>
			<div class="columns large-3 hide-for-small hide-for-medium">
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
			<div class="columns large-9 hide-for-large-up">
				<ul class="lt-menu">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
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
				</ul>
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
			<div class="columns large-8 post-content" id="li-LiteraturePosts">
				<?php
					if(count($posts)>0){
						foreach ($posts as $key => $value) {
							$date=date('M j Y g:i a',strtotime($value['LiteraturePost']['updated_at']));
							echo "<div class='post-pane'>";
								echo "<div class='post-pane-heading'>";
									echo $value['LiteraturePost']['title'];
								echo "</div>";
								echo "<div class='post-pane-body'>";
									echo $value['LiteraturePost']['meta_description'];
								echo "</div>";
								echo "<div class='post-pane-heading'>";
									echo '<ul class="postBylist">';
									echo '<li class="listitem"><i class="fa fa-clock-o fa-fw"></i>'.$date.'</li>';
									echo "<li class='listitem'><b>For </b>".$value['Level']['level_name']."</li><li class='listitem'><b>By</b> ".$value['Admin']['firstname']." ".$value['Admin']['lastname']."</li>";
									echo "<span class='right'><a class='read-link get-lit-post' id='".$value['LiteraturePost']['id']."'>Read more</a></span>";
									echo '</ul>';
								echo "</div>";
							echo "</div>";
						}
					}

				?>
			</div>
		</div>
		</div>
		<div class="loading">
			<i class="fa fa-spinner fa-spin fa-3x"></i>
		</div>
	</div>
</div>