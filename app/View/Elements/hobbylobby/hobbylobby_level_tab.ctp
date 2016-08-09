<div class="row">
			<div class="columns large-9 hide-for-small hide-for-medium">
				<ul class="vi-menu hl">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'>";
							echo $this->Html->link($l['Level']['level_name'],array('controller'=>'HobbylobbyPosts','action'=>'get_hobby',$l['Level']['id']),array('escape' => false));
							echo "</li>";
						}
					?>
				</ul>
			</div>
			<div class="columns large-3 hide-for-small hide-for-medium">
				<li class='has-sub-menu-lit right lit-cat' style="font-size:13px">
				  <?php
				  	echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa')) . " View all",array('controller'=>'HobbylobbyPosts','action'=>'index'),array('escape' => false));
				  ?>


	            </li>
			</div>
			<div class="columns large-9 hide-for-large-up">
				<ul class="vi-menu hl">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'>";
							echo $this->Html->link($l['Level']['level_name'],array('controller'=>'HobbylobbyPosts','action'=>'get_hobby',$l['Level']['id']),array('escape' => false));
							echo "</li>";
						}
					?>
					<li class='has-sub-menu-lit lit-cat' style="font-size:13px">
					  <?php
					  	echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa')) . " View all",array('controller'=>'HobbylobbyPosts','action'=>'index'),array('escape' => false));
					  ?>
	            </li>
				</ul>
			</div>
		</div>