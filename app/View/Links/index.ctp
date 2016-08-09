<div class="row radius">
	<?php echo $this->Element('links/links_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('links/link_level_tab');?>
		<div id="sub_lit">
		<div class="row">
			<div class="columns large-12" id="vi-cont">
			<table id="example" class="display responsive" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		        	<th></th>
		            <th>Video Name</th>
		            <th>Level-Subject-Category</th>
		            <th>Sub Category</th>
		            <th>Action</th>
		        </tr>
		    </thead>
			<tbody>
				<?php
					foreach ($videos as $key => $value) {
						// echo pr($value);
						echo "<tr>";
						$myArray=explode('/', $value['Link']['link_url']);
							echo '<td><img src="http://img.youtube.com/vi/'.$myArray[4].'/default.jpg"></td>';
							echo "<td>".$value['Link']['link_title']."</td>";
							echo "<td>".$value['Topic']['display_name']."</td>";
							$sb="";
							if($value['SubTopic']['name']!="" || $value['SubTopic']['name']!=NULL){
								$sb=$value['SubTopic']['name'];
							}
							else{
								$sb="Not applicable";
							}
							echo "<td>".$sb."</td>";
							echo "<td>";
								echo $this->Html->link('View video',array('controller'=>'Links','action'=>'view_video',$value['Link']['id']),array('escape' => false,'class'=>'book-link button tiny'));
									echo '<a href="#" class="book-desc button tiny info" data-reveal-id="md-'.$value['Link']['id'].'">Read video description</a>

									<div id="md-'.$value['Link']['id'].'" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
									 <br/>
									 <h4>Video Description</h4>
									 <hr/>
									 	<div class="book-d radius">
									 		<h5><b>Links Details:</b></h5>
									 		'.$value['Link']['tags'].'
									 		<h7><b>Video Belongs to Category:</b></h7> '; 
											if($value['SubTopic']['id']!=NULL){
												echo $value['Topic']['display_name'].' - '.$value['SubTopic']['name'];	
											}
											else{
												echo $value['Topic']['display_name'];	
											}
										echo '</div>
									  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
									</div>';
							echo "</td>";
						echo "</tr>";
					}

				?>
			</tbody>
			</table>
			</div>
		</div>
		<div class="loading">
			<i class="fa fa-spinner fa-spin fa-3x"></i>
		</div>
		</div>
	</div>
</div>