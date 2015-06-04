
	<div class="video-table">
		<div class="video-row">
		<div class="video-link">
			<ul class="accordion" role="navigation">
			<h5 align="center">Sub Topics</h5>
			<?php
			if($subs!=NULL){
			foreach ($subs as $sub) {

				echo '
				<li class="accordion-navigation"><a href="#sub-menu">'.$sub['SubTopic']['name'].'</a>
				<div id="v-side-sub-menu" class="content active">
					<ul  class="side-nav">';
					foreach ($links as $link) {
						if($link['Link']['sub_topic_id']==$sub['SubTopic']['id']){
							echo '<li><a>'.$link['Link']['link_title'].'</a></li>';
						}
					}
					echo '</ul>
				</div>
				</li>
				';
			}}?>
			</ul>
			</div>
		<?php 
		if($links!=NULL){
		echo '
			<div class="video-media">
			<h4>'.$links[0]['Link']['link_title'].'</h4>';
		echo '<br/>';
		echo '
			<iframe id="video1" width="725" height="433" src="'.$links[0]['Link']['link_url'].'" frameborder="1" allowfullscreen></iframe>
			</div>';
		echo '<div id="video_desc" class="video-desc"><h6>Video Description</h6><br/>'.$links[0]['Link']['tags'];
		}
		else{
			echo'
			<div class="video-media"><h4>Content Not Available</h4></div>
			<div id="video_desc" class="video-desc"><h6>Video Description</h6><br/>';
		}
		?>
		<?php	
			

		?>
		</div>
</div>
		