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
									echo "<a class='watch_p' id='".$value['HobbylobbyPost']['id']."'><h3 class='read-link'>".$value['HobbylobbyPost']['title']."</h3></a>";
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
		<div class="loading">
			<i class="fa fa-spinner fa-spin fa-3x"></i>
		</div>
		</div>
	</div>
</div>