<div class="row radius">
	<?php echo $this->Element('hobbylobby/hobbylobby_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('hobbylobby/hobbylobby_level_tab');?>
		<div id="sub_lit">

		<div class="row">
			<div class="columns large-12" id="vi-cont">
				<div class="row"><div class="columns large-8">
				<?php
					foreach ($posts as $key => $value) {
						$date=date('M j Y, g:i a',strtotime($value['HobbylobbyPost']['updated_at']));
						echo "<div class='panel'>";
								echo $this->Html->link("<h3 class='read-link'>".$value['HobbylobbyPost']['title']."</h3>",array('controller'=>'HobbylobbyPosts','action'=>'view_post',$value['HobbylobbyPost']['id']),array('escape' => false));
								echo "<div class='post-pane-body'>";
									echo $value['HobbylobbyPost']['meta_description'];
									echo '<ul class="postBylist">';
									echo '<li class="listitem"><i class="fa fa-clock-o fa-fw"></i>'.$date.'</li>';
									echo "<li class='listitem'><b>For </b>".$value['Level']['level_name']."</li><li class='listitem'><b>By</b> ".$value['Admin']['firstname']." ".$value['Admin']['lastname']."</li>";
									echo '</ul>';
								echo "</div>";
							echo "</div>";?>
						<?php
					}

				?>
				</div></div>
			</div>
		</div>
		</div>
	</div>
</div>