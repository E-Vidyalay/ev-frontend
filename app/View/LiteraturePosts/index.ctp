<div class="row radius">
	<?php echo $this->Element('literature_post/literature_post_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('literature_post/literature_post_level_tab');?>
		<div id="sub_lit">
		<?php echo $this->Element('literature_post/literature_post_cat_tab');?>
		<div class="row ">
			<div class="columns large-9 post-content" id="li-LiteraturePosts">
				<?php
					if(count($posts)>0){
						foreach ($posts as $key => $value) {
							$date=date('M j Y g:i a',strtotime($value['LiteraturePost']['updated_at']));
							echo "<div class='panel'>";
							echo $this->Html->link("<h3 class='read-link'>".$value['LiteraturePost']['title']."</h3>",array('controller'=>'LiteraturePosts','action'=>'get_post',$value['LiteraturePost']['id']),array('escape' => false));
								echo "<div class='post-pane-body'>";
									echo $value['LiteraturePost']['meta_description'];
									echo '<ul class="postBylist">';
									echo '<li class="listitem"><i class="fa fa-clock-o fa-fw"></i>'.$date.'</li>';
									echo "<li class='listitem'><b>For </b>".$value['Level']['level_name']."</li><li class='listitem'><b>By</b> ".$value['Admin']['firstname']." ".$value['Admin']['lastname']."</li>";
									echo '</ul>';
								echo "</div>";
							echo "</div>";
						}
					}

				?>
			</div>
		</div>
		</div>
		<div class="loading">
			<i class="fa fa-spinner fa-spin fa-3x"></i>
		</div>
	</div>
</div>