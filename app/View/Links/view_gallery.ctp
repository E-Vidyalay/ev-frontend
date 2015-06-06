<aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Sub Topics</label></li>
        <?php
        if($subs!=NULL){
			foreach ($subs as $sub) {

				echo '
				<li class="has-submenu"><a>'.$sub['SubTopic']['name'].'</a>
					<ul  class="right-submenu">
					<li class="back"><a href="#">Back</a></li>
					<li><label>'.$sub['SubTopic']['name'].'</label></li>';
					foreach ($links as $link) {
						if($link['Link']['sub_topic_id']==$sub['SubTopic']['id']){
							echo '<li id="'.$link['Link']['id'].'"><a>'.$link['Link']['link_title'].'</a></li>';
						}
					}
					echo '</ul>
				</li>
				';
			}}?>
      </ul>
    </aside>
<div class="row video-row">
  <div class="large-2 video-link hide-for-small hide-for-medium"><ul class="accordion" role="navigation">
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
							echo '<li id="'.$link['Link']['id'].'"><a><i class="fa fa-arrow-right fa-fw"></i>'.$link['Link']['link_title'].'</a></li>';
						}
					}
					echo '</ul>
				</div>
				</li>
				';
			}}?>
			</ul></div>
<div id="video-file" class"large-10 columns" >
			<?php if($links!=NULL){?>
  <div class="video-media show-for-large-up" style="margin-left:280px; width: 860px;">
  <?php echo '<h4 align="center">'.$links[0]['Link']['link_title'].'</h4>';
		echo '<iframe id="video1" width="830" height="480" src="'.$links[0]['Link']['link_url'].'" frameborder="1" allowfullscreen align="center"></iframe>';
		echo '<div class="video-desc"><h6>Video Description</h6><br/>'.$links[0]['Link']['tags'].'</div></div>';}
  		else{
  		echo '<div id="video-file" class"large-10 columns"><div  class="video-media show-for-large-up" style="margin-left:280px;"><h2>Content Not Available</h2><div class="video-desc"><h6>Video Description</h6><br/>No Description are there.</div></div>
</div>	';
  	}?>
  	<div id="video-file" class"large-10 columns">
			<?php if($links!=NULL){?>
  <div class="video-media hide-for-large-up">
  <?php echo '<h4 align="center">'.$links[0]['Link']['link_title'].'</h4>';
		echo '<iframe id="video1" width="830" height="480" src="'.$links[0]['Link']['link_url'].'" frameborder="1" allowfullscreen align="center"></iframe>';
		echo '<div class="video-desc"><h6>Video Description</h6><br/>'.$links[0]['Link']['tags'].'</div></div>';}
  		else{
  		echo '<div id="video-file" class"large-10 columns"><div  class="video-media hide-for-large-up"><h2>Content Not Available</h2><div class="video-desc"><h6>Video Description</h6><br/>No Description are there.</div></div>
</div>	';
  	}?>
</div>
