<div>
	<div class="video-table">
		<div class="video-row">
			<?php
			foreach ($subs as $sub) {
				echo '<div class="video-link"><label>'.$sub['SubTopic']['name'].'</label></div>';
			}?>
		<?php 
		foreach($links as $l) { 	
			echo '<div class="video-link"><label>'.$l['Link']['link_title'].'</label></div>';
			echo '<div class="video-media">';
			echo '<iframe width="725" height="433" src="'.$l['Link']['link_url'].'" frameborder="1" allowfullscreen></iframe>';
			echo '</div>';
			echo '<div class="video-desc">'.$l['Link']['tags'].'</div>';
		}

		?>