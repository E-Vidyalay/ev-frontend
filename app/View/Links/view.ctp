
<div>
<table class="video-table">
<?php
$i=1;
foreach ($links as $l) {
	echo '<tr>';
	echo '<td class="video-link" rowspan="2">'. $l['Link']['id'].'</td><td class="video-media">';
	echo '<div class="columns medium-5">';
	echo '<iframe width="853" height="480" src="'.$l['Link']['link_url'].'" frameborder="1" allowfullscreen></iframe>';
	$i=$i+1;
	echo '</div>';
	echo '</td></tr>';	
}
?>

</table>
</div>
