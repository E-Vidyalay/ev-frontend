
<br/>
<div class="row radius">
	<div class="columns large-2 latest-pane">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				// if(count($latest)>0){
				// 	foreach ($latest as $key => $value) {
				// 		echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$value['Ebook']['id']."/".$value['Ebook']['path']."'>".$value['Ebook']['name']." : ".$value['Literature']['name']." - ".$value['SubLiterature']['name']." ( ".$value['Level']['level_name'].")</a></li> ";
				// 	}	
				// }
				// else{
				// 	for($i=0;$i<2;$i++){
				// 		echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$latest[$i]['Ebook']['id']."/".$latest[$i]['Ebook']['path']."'>".$latest[$i]['Ebook']['name']." : ".$latest[$i]['Literature']['name']." - ".$latest[$i]['SubLiterature']['name']." ( ".$latest[$i]['Level']['level_name'].")</a></li> ";
				// 	}
				// }
				
			?>	
		</ul>
	</div>
	<div class="columns large-10" style="background: #fff;">
		<!--<div class="row">
			<div class="columns large-9">
				<ul class="vi-menu vi">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
				</ul>
			</div>
			<div class="columns large-3">
				<li class='has-sub-menu-lit right lit-cat' style="font-size:13px">
				  <?php
				  	echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa')) . " View all",array('controller'=>'Links','action'=>'index'),array('escape' => false));
				  ?>
	   
	              
	            </li>
			</div>
		</div>-->
		
		<div id="sub_lit">
		
		<div class="row">
			<div class="columns large-12" id="vi-cont">
			<table id="example" class="display" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		            <th>Title</th>
		            <th>Category</th>
		            <th>Description</th>
		            <th>Action</th>
		        </tr>
		    </thead>
			<tbody>
				<?php

					foreach ($lpost as $a) {
                                echo "<tr>";
                                echo "<td>".$a['LiteraturePost']['title']."</td>";
                                echo "<td>".$a['Literature']['name']." - ".$a['SubLiterature']['name']."</td>";
                                echo "<td>".$a['LiteraturePost']['meta_description']."</td>";
                                //echo "<td>".'<a href="#" class="book-desc" data-reveal-id="md-'.$a['LiteraturePost']['id'].'">Read Post description</a>'."</td>";
                                echo "<td>";

                                     echo $this->Html->link('View',array('controller'=>'LiteraturePosts','action'=>'view_posts',$a['LiteraturePost']['id']),array('class'=>'book-link watch_v'));
                                echo "</td>";
                                echo "</tr>";
                     }

					/*foreach ($videos as $key => $value) {
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
					}*/
					
				?> 
			</tbody>
			</table>
			</div>
		</div>
		<div class="loading">
			<?php
				echo $this->Html->image('loader.gif');
			?>
		</div>
		</div>
	</div>
</div>
