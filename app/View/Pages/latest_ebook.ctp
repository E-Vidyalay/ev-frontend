<br/>
<br/>
<div class="content-card" id="home-content">
	<div class="row">
	<h3 class="head-navu">નવા ઇ-બુક</h3>
	</div>
	<div class="row">
	<div class="columns large-8 large-offset-2">
		<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3">
		  <?php
		  if(!empty($books)){ 
		  	for ($i=0;$i<sizeof($books);$i++) {
		  		if($i<10){
		  			if($books[$i]['Ebook']['contributed']==0){
					echo '<li>'.$this->Html->tag('i', '', array('class' => 'fa fa-book fa-fw')).'&nbsp;&nbsp;<a target="_blank" href="'.$admin_url.'/files/ebook/path/'.$books[$i]['Ebook']['id']."/".$books[$i]['Ebook']['path'].'"  class="link_book">'.$books[$i]['Ebook']['name'].'</a></li>';
				}
				else{
					echo '<li>'.$this->Html->tag('i', '', array('class' => 'fa fa-book fa-fw')).'&nbsp;&nbsp;<a target="_blank" href="'.$this->webroot.'files/ebook/path/'.$books[$i]['Ebook']['id']."/".$books[$i]['Ebook']['path'].'"  class="link_book">'.$books[$i]['Ebook']['name'].'</a></li>';	
				}
				}
		  	}
		  }
		  	else{
		  		echo '<br/><br/><h4 align="center">કોઈ નવી ઇ-બુક ઉપલબ્ધ નથી</h4>
		  				<br/><br/>';
		  	}
		  ?>
		</ul>
	</div>
	<div class="row">
	<div class="columns large-8 large-offset-2" id="watch_post" style="display:none;">
		
	</div>
	</div>
	</div>
</div>	