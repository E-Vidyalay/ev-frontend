<div class="row radius">
	<?php echo $this->Element('links/links_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('links/link_level_tab');?>
		<div id="sub_lit">
		<div class="row">
			<div class="columns large-12" id="vi-cont">
				<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
					<?php 
						echo $this->Html->link($subject['Subject']['name'],array('controller'=>'Links','action'=>'get_topics',$subject['Subject']['id'],$subject['Topic']['level_id']),array('escape' => false,'style'=>'font-size:13px;padding:2px')) .' / ';
						echo $subject['Topic']['name'];
					 ?>
				</div>
				<div class="row">
					<?php
					?>
						<div class="columns large-3">
							<div class="ev-box">
							<div class="ev-box-head">
								<?php echo $subject['Topic']['name'];?>

							</div>
							<ul id='subl-vi'>
								<?php if(count($subs)>0){
									foreach ($subs as $st) {
											echo "<li>";
											echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-arrow-circle-right')).' '.$st['SubTopic']['name'],array('controller'=>'Links','action'=>'get_links',$st['SubTopic']['id']),array('escape' => false));
											echo "</li>";
										
									}
									}
									echo "<br/>";
									echo "<div style='text-ailgn:center'>Click ".$this->Html->link('here',array('controller'=>'Links','action'=>'get_no_sub',$subject['Topic']['id']),array('escape' => false))." to watch videos on ".$subject['Topic']['name']."</div>";
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