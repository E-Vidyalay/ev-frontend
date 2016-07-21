<div class="row">
			<div class="columns large-9 hide-for-small hide-for-medium">
				<ul class="lt-menu">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'>";
							echo $this->Html->link($l['Level']['level_name'],array('controller'=>'LiteraturePosts','action'=>'get_level_post',$l['Level']['id']),array('escape' => false));
							echo "</li>";
						}
					?>
				</ul>
			</div>
			<div class="columns large-3 hide-for-small hide-for-medium">
				<li class='has-sub-menu-lit right lit-cat'>
	              <a style="font-size:14px">Select category &nbsp;<i class='fa fa-angle-down'> </i></a>
	              <ul class='sub-menu-lit'>
	               	<?php
	               		foreach($lit as $l){
	               			echo "<li>";
	               			echo $this->Html->link($l['Literature']['name'],array('controller'=>'LiteraturePosts','action'=>'get_lit_post',$l['Literature']['id']),array('escape' => false));
	               			echo"</li>";
	               		}
	               	?>
	              </ul>
	            </li>
			</div>
			<div class="columns large-9 hide-for-large-up">
				<ul class="lt-menu">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'>";
							echo $this->Html->link($l['Level']['level_name'],array('controller'=>'LiteraturePosts','action'=>'get_level_post',$l['Level']['id']),array('escape' => false));
							echo "</li>";
						}
					?>
					<li class='has-sub-menu-lit right lit-cat'>
	              <a style="font-size:14px">Select category &nbsp;<i class='fa fa-angle-down'> </i></a>
	              <ul class='sub-menu-lit'>
	               	<?php
	               		foreach($lit as $l){
	               			echo "<li>";
	               			echo $this->Html->link($l['Literature']['name'],array('controller'=>'LiteraturePosts','action'=>'get_lit_post',$l['Literature']['id']),array('escape' => false));
	               			echo"</li>";
	               		}
	               	?>
	              </ul>
	            </li>
				</ul>
			</div>
		</div>