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
		            <th>Video Name</th>
		            <th>Category</th>
		            <th>Sub-Category</th>
		            <th>Action</th>
		        </tr>
		    </thead>
			<tbody>
				<?php
					foreach ($videos as $key => $value) {
						echo "<tr>";
							echo "<td>".$value['Link']['link_title']."</td>";
							echo "<td>".$value['Topic']['name']."</td>";
							$sb="";
							if($value['SubTopic']['name']!="" || $value['SubTopic']['name']!=NULL){
								$sb=$value['SubTopic']['name'];
							}
							else{
								$sb="Not applicable";
							}
							echo "<td>".$sb."</td>";
							echo "<td>";
								echo "<a href='#' class='book-link watch_v' id='".$value['Link']['id']."' >View video</a>";
									echo '<a href="#" class="book-desc" data-reveal-id="md-'.$value['Link']['id'].'">Read video description</a>

									<div id="md-'.$value['Link']['id'].'" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
									 <br/>
									 <h4>Video Description</h4>
									 <hr/>
									 	<div class="book-d radius">
									 		'.$value['Link']['tags'].'
									 	</div>
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