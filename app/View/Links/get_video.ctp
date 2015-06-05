
<div id="video-file" class"large-10 columns" >
			<?php if($link!=NULL){?>
  <div class="video-media show-for-large-up" style="margin-left:280px; width: 860px;">
  <?php echo '<h4 align="center">'.$link['Link']['link_title'].'</h4>';
		echo '<iframe id="video1" width="830" height="480" src="'.$link['Link']['link_url'].'" frameborder="1" allowfullscreen align="center"></iframe>';
		echo '<div class="video-desc"><h6>Video Description</h6><br/>'.$link['Link']['tags'].'</div></div>';}
  		else{
  		echo '<div id="video-file" class"large-10 columns"><div  class="video-media show-for-large-up" style="margin-left:280px;"><h2>Content Not Available</h2></div><div class="video-desc"><h6>Video Description</h6><br/>No Description are there.</div>
</div>	';
  	}?>
  	<div id="video-file" class"large-10 columns">
			<?php if($link!=NULL){?>
  <div class="video-media hide-for-large-up">
  <?php echo '<h4 align="center">'.$link['Link']['link_title'].'</h4>';
		echo '<iframe id="video1" width="830" height="480" src="'.$link['Link']['link_url'].'" frameborder="1" allowfullscreen align="center"></iframe>';
		echo '<div class="video-desc"><h6>Video Description</h6><br/>'.$link['Link']['tags'].'</div></div>';}
  		else{
  		echo '<div id="video-file" class"large-10 columns"><div  class="video-media hide-for-large-up"><h2>Content Not Available</h2></div><div class="video-desc"><h6>Video Description</h6><br/>No Description are there.</div>
</div>	';
  	}?>