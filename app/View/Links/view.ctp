
<div>
<div class="video-table">
<?php
$i=1;
foreach ($links as $l) {
	echo '<div class"video-row">';
	echo '<div class="video-link">'. $l['Link']['id'].'</div><div class="video-media">';
	
	echo '<iframe width="853" height="480" src="'.$l['Link']['link_url'].'" frameborder="1" allowfullscreen></iframe>';
	echo '</div><div class="video-desc">'.$l['Link']['tags'].'</div></div>';	
}
?>
</div>
</div>
