<br/>
<div class="content-card large-12 small-12 large-offset-0 small-offset-0">
	<div class="row">
		<div class="columns large-2 large-offset-0">
			<div class="columns large-2 latest-pane" style="width: 100%;">
				<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
				<div class="seperator"></div>
				<ul class="side-nav" style="color:white;">
					<?php foreach ($levels as $key => $value) {
						// pr($value);
						echo '<li style="background-color:'.$value['Level']['color'].'">'.$this->Html->link($value['Level']['level_name']." વિડિઓઝ",array('controller'=>'Pages','action'=>'latest_video',$value['Level']['id']),array('style'=>'color:white;')).'</li>';
					}?>
					<li><?php echo $this->Html->link("View all",array('controller'=>'Links','action'=>'index'),array('style'=>'color:white;'));?></li>
				</ul>
			</div>	
		</div>
		<div class="columns large-10 large-offset-0">
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
					  		$myArray=explode('/', $links[$i]['Link']['link_url']);
							echo '<li class="videos">';
							echo '<a class="link_video video" id="'.$links[$i]['Link']['id'].'">';
							echo '<span></span>';
							echo '<img src="http://i1.ytimg.com/vi/'.$myArray[4].'/0.jpg" alt="'.$links[$i]['Link']['link_title'].'" />';
							echo $links[$i]['Link']['link_title'];
							echo '</a>';

							echo '</li>';
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
	</div>
</div>