<br/>
<br/>
<div class="content-card" id="home-content">
	<div class="row">
	<h3 class="head-navu">નવા પોસ્ટ</h3>
	</div>
	<div class="row">
	<div class="columns large-12 large-offset-0">
		<ul id="latest_ul" class="small-block-grid-2 medium-block-grid-3 large-block-grid-5">
		  <?php
		  if(!empty($posts)){ 
		  	for ($i=0;$i<sizeof($posts);$i++) {
		  		if($i<10){
				echo '<li aria-label="Thumbnail" class="th">'.$this->Html->tag('i', '', array('class' => 'fa fa-smile-o fa-fw')).'&nbsp;&nbsp;<a class="link_lekh" id="'.$posts[$i]['LiteraturePost']['id'].'">'.$posts[$i]['LiteraturePost']['title'].'</a></li>';
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
	<div class="columns large-10 large-offset-1" id="watch_post" style="display:none;">
		
	</div>
	</div>
	</div>
</div>