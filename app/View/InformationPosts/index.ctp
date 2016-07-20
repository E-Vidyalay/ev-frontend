<div class="row radius">
	<?php echo $this->Element('information/information_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('information/information_level_tab');?>
		
		<div class="row">
			<div class="columns large-12" id="vi-cont">
				<h2> માહિતિ મિત્ર</h2>
				<hr/>
				<div class="row"><div class="columns large-9">
				<?php
					foreach ($posts as $key => $value) {
						$date=date('M j Y g:i a',strtotime($value['InformationPost']['updated_at']));
						echo "<div class='panel'>";
						echo $this->Html->link("<h3 class='read-link'>".$value['InformationPost']['title']."</h3>",array('controller'=>'InformationPosts','action'=>'view_post',$value['InformationPost']['id']),array('escape' => false));
									echo "<div class='post-pane-body'>";
									echo $value['InformationPost']['meta_description'];
									echo '<ul class="postBylist">';
									echo '<li class="listitem"><i class="fa fa-clock-o fa-fw"></i>'.$date.'</li>';
									echo "<li class='listitem'><b>By</b> ".$value['Admin']['firstname']." ".$value['Admin']['lastname']."</li>";
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
