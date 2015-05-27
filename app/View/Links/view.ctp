
<div>
<?php
$i=1;
foreach ($links as $l) {
	echo '<div class="columns medium-5">';
	echo '<iframe width="480" height="270" src="'.$l['Link']['link_url'].'" frameborder="1" allowfullscreen></iframe>';
	$i=$i+1;
	echo '</div>';	
}
?>
</div>
