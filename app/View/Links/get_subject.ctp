<div class="row radius">
	<?php echo $this->Element('links/links_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('links/link_level_tab');?>
		<div id="sub_lit">
		<div class="row">
			<div class="columns large-12" id="vi-cont">
				<div class="row cat-content">
					<div class="columns large-12">
						<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
							<?php
								if(isset($err)){
									echo $err;
								}
								else{
							?>
							<ul id='subs' class='sb'>
								<?php
									foreach ($subjects as $key => $value) {
										echo "<li>";
										echo $this->Html->link($value['Subject']['name'],array('controller'=>'Links','action'=>'get_topics',$value['Subject']['id'],$value['level_id']),array('escape' => false));
										echo "</li>";
									}
								?>
							</ul>
							<?php }?>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
