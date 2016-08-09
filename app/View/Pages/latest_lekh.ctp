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
						echo '<li style="background-color:'.$value['Level']['color'].'">'.$this->Html->link($value['Level']['level_name']." સાહિત્ય લેખ",array('controller'=>'Pages','action'=>'latest_lekh',$value['Level']['id']),array('style'=>'color:white;')).'</li>';
					}?>
					<li><?php echo $this->Html->link("View all",array('controller'=>'LiteraturePosts','action'=>'index'),array('style'=>'color:white;'));?></li>
				</ul>
			</div>	
		</div>
		<div class="columns large-10 large-offset-0">
			<div class="row">
				<h3 class="head-navu">નવા સાહિત્ય લેખ</h3>
			</div>
			<div class="row">
				<div class="columns large-12 large-offset-0">
					<ul id="latest_ul" class="small-block-grid-2 medium-block-grid-3 large-block-grid-5">
					  <?php
					  if(!empty($posts)){ 
					  	for ($i=0;$i<sizeof($posts);$i++) {
					  		if($i<10){
							echo '<li>'.$this->Html->tag('i', '', array('class' => 'fa fa-smile-o fa-fw')).'&nbsp;&nbsp;<a class="link_lekh" id="'.$posts[$i]['LiteraturePost']['id'].'">'.$posts[$i]['LiteraturePost']['title'].'</a></li>';
							}
					  	}
					  }
					  	else{
					  		echo '<br/><br/><h4 align="center">કોઈ નવી પોસ્ટ ઉપલબ્ધ નથી</h4>
					  				<br/><br/>';
					  	}
					  ?>
					</ul>
				</div>
				<div class="row">
					<div class="columns large-10 large-offset-1 post-content" id="watch_post" style="display:none;">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>