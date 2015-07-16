<br/>
<div class="content-card large-10 small-12 large-offset-1 small-offset-0" id="home-content">
	<div class="row">
	<h3 class="head-navu">નવા વિડીયો</h3>
	</div>
	<div class="row">
	<div class="columns large-12 large-offset-0">
		<ul id="latest_ul" class="small-block-grid-2 medium-block-grid-3 large-block-grid-5">
		  <?php
		  if(!empty($links)){ 
		  	for ($i=0;$i<sizeof($links);$i++) {
		  		if($i<10){
				echo '<li>'.$this->Html->tag('i', '', array('class' => 'fa fa-play-circle-o fa-1x')).'&nbsp;&nbsp;<a class="link_video" id="'.$links[$i]['Link']['id'].'" class="">'.$links[$i]['Link']['link_title'].'</a></li>';
				}
		  	}
		  }
		  	else{
		  		echo '<br/><br/><h4 align="center">કોઈ નવા વિડિઓઝ ઉપલબ્ધ નથી</h4>
		  				<br/><br/>';
		  	}
		  ?>
		</ul>
	</div>
	<div class="row">
	<div class="columns large-10 large-offset-1" id="watch_video" style="display:none;">
		
	</div>
	</div>
	</div>
</div>