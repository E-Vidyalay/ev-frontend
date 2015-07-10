<br/>
<br/>
<div class="content-card" id="home-content">
	<div class="row">
	<h3 class="head-navu">નવા વિડીયો</h3>
	</div>
	<div class="row">
	<div class="columns large-12 large-offset-1">
		<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
		  <?php
		  if(!empty($links)){ 
		  	foreach ($links as $key => $value) {
		  		echo '<li><a><i class="fa fa-play-circle-o fa-fw"></i>'.$value['Link']['link_title'].'</li></a>';		
		  	}
		  	}
		  	else{
		  		echo '<h4>Sorry no New Videos</h4>';
		  	}
		  ?>
		</ul>
	</div>
	</div>
</div>