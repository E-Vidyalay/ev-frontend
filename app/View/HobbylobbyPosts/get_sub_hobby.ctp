<div class="row radius">
	<?php echo $this->Element('hobbylobby/hobbylobby_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('hobbylobby/hobbylobby_level_tab');?>
		<div id="sub_lit">

		<div class="row">
			<div class="columns large-12" id="vi-cont">
				<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
					<?php echo "<a href='#' style='font-size:13px;padding:2px'>".$hobby['Hobby']['name']."</a>"; ?>
				</div>
				<div class="row">
					<div class="columns large-3">
							<div class="ev-box">
							<div class="ev-box-head">
								<?php echo 'Sub Hobby';?>
							</div>
					
						
							<ul id='subl-subhb'>
							<?php
							foreach ($subhobbys as $key => $value) {
								echo "<li>";
									echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-arrow-circle-right')).' '.$value['SubHobby']['name'],array('controller'=>'HobbylobbyPosts','action'=>'get_posts',$value['SubHobby']['id'],$lid),array('escape' => false));
								echo "</li>";
							}
							?>
							</ul>
							</div>

						</div>
					
					<br/>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>