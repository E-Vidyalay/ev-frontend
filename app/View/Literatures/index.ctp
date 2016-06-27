<div class="row radius">
	<div class="columns large-2 latest-pane hide-for-small hide-for-medium" style="position: fixed;width: 200px;">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				// pr($latest);
				if(count($latest)>0){
					for ($i=0;$i<sizeof($latest);$i++) {
						if($i<7){
						if($latest[$i]['Ebook']['contributed']==0){
							echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$latest[$i]['Ebook']['id']."/".$latest[$i]['Ebook']['path']."'>".$latest[$i]['Ebook']['name']." : ".$latest[$i]['Literature']['name']." - ".$latest[$i]['SubLiterature']['name']." ( ".$latest[$i]['Level']['level_name'].")</a></li> ";
						}
						else{
							echo "<li style='padding-top:5px;'><a target='_blank' href='".$this->webroot."files/ebook/path/".$latest[$i]['Ebook']['id']."/".$latest[$i]['Ebook']['path']."'>".$latest[$i]['Ebook']['name']." : ".$latest[$i]['Literature']['name']." - ".$latest[$i]['SubLiterature']['name']." ( ".$latest[$i]['Level']['level_name'].")</a></li> ";
						}
						}
					}
				}
				else if(count($books)>=2){
					for($i=0;$i<2;$i++){
						if($book[$i]['Ebook']['contributed']==0){
							echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$books[$i]['Ebook']['id']."/".$books[$i]['Ebook']['path']."'>".$books[$i]['Ebook']['name']." : ".$books[$i]['Literature']['name']." - ".$books[$i]['SubLiterature']['name']." ( ".$books[$i]['Level']['level_name'].")</a></li> ";
						}
						else{
							echo "<li style='padding-top:5px;'><a target='_blank' href='".$this->webroot."files/ebook/path/".$books[$i]['Ebook']['id']."/".$books[$i]['Ebook']['path']."'>".$books[$i]['Ebook']['name']." : ".$books[$i]['Literature']['name']." - ".$books[$i]['SubLiterature']['name']." ( ".$books[$i]['Level']['level_name'].")</a></li> ";
						}
					}
				}
				else{
					echo "<a style='font-size:15px;color:#fff;cursor: default;'>કઈ નવું ઉપલબ્ધ નથી</a> ";
				}


			?>
		</ul>
	</div>
	<div class="columns large-10" style="background: #fff;">
		<div class="row">
			<div class="columns large-9 hide-for-small hide-for-medium">
				<ul class="lt-menu" id="level_menu">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
				</ul>
			</div>
			<div class="columns large-3 hide-for-small hide-for-medium">
				<li class='has-sub-menu-lit right lit-cat'>
	              <a style="font-size:14px">Select category &nbsp;<i class='fa fa-angle-down'> </i></a>
	              <ul class='sub-menu-lit' id="lit_menu">
	               	<?php
	               		foreach($lit as $l){
	               			echo "<li><a id='".$l['Literature']['id']."'>".$l['Literature']['name']."</a></li>";
	               		}
	               	?>
	              </ul>
	            </li>
			</div>
			<div class="columns large-9 hide-for-large-up">
				<ul class="lt-menu" id="level_menu">
					<?php
						foreach($levels as $l){
							echo "<li style='background:".$l['Level']['color']."'><a id='".$l['Level']['id']."'>".$l['Level']['level_name']."</a></li>";
						}
					?>
					<li class='has-sub-menu-lit right lit-cat'>
	              <a style="font-size:14px">Select category &nbsp;<i class='fa fa-angle-down'> </i></a>
	              <ul class='sub-menu-lit' id="lit_menu">
	               	<?php
	               		foreach($lit as $l){
	               			echo "<li><a id='".$l['Literature']['id']."'>".$l['Literature']['name']."</a></li>";
	               		}
	               	?>
	              </ul>
	            </li>
				</ul>
			</div>
		</div>
		<div id="sub_lit">
		<div class="row cat-content">
			<div class="columns large-12">
				<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
					<ul id='slit-list'>
						<?php
							foreach ($slit as $key => $value) {
								echo "<li><a id='".$value['SubLiterature']['id']."'>".$value['SubLiterature']['name']."</a></li>";
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="columns large-12" id="li-ebooks">
			<table id="example" class="display responsive" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		            <th>Book Name</th>
		            <th>લેખક</th>
		            <th>સંકલનકાર</th>
		            <th>અનુવાદ સાથે</th>
		            <th>ચિત્રો સાથે</th>
		            <th>Category</th>
		            <th>Book type</th>
		            <th>Level</th>
		            <th>Action</th>
		        </tr>
		    </thead>
			<tbody>
				<?php
					foreach ($books as $key => $value) {
						echo "<tr>";
							echo "<td>".$value['Ebook']['name']."</td>";
							if($value['Ebook']['author']!=null){
								echo "<td>".$value['Ebook']['author']."</td>";
							}
							if($value['Ebook']['compiler']!=null){
								echo "<td>".$value['Ebook']['compiler']."</td>";
							}
							
							if($value['Ebook']['with_translation']==1){
								echo "<td>અંગ્રેઝી અનુવાદ ઉપલબ્ધ છે.</td>";
							}
							else{
								echo "<td>અંગ્રેઝી અનુવાદ ઉપલબ્ધ નથી.</td>";
							}
							if($value['Ebook']['with_picture']==1){
								echo "<td>ચિત્રો ઉપલબ્ધ છે.</td>";
							}
							else{
								echo "<td>ચિત્રો ઉપલબ્ધ નથી.</td>";
							}
							echo "<td>".$value['Literature']['name']."</td>";
							echo "<td>".$value['SubLiterature']['name']."</td>";
							echo "<td>".$value['Level']['level_name']."</td>";
							echo "<td>";
								if($value['Ebook']['contributed']==0){
									echo "<a target='_blank' href='".$admin_url."files/ebook/path/".$value['Ebook']['id']."/".$value['Ebook']['path']."' class='book-link'>Read book</a>";
								}
								else{
									echo "<a target='_blank' href='".$this->webroot."files/ebook/path/".$value['Ebook']['id']."/".$value['Ebook']['path']."' class='book-link'>Read book</a>";
								}
								echo "<br>";
								echo "<br>";
									echo '<a href="#" class="book-desc" data-reveal-id="md-'.$value['Ebook']['id'].'">Read book description</a>

									<div id="md-'.$value['Ebook']['id'].'" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
									 <br/>
									 <h4>Book Description</h4>
									 <hr/>
									 	<div class="book-d radius">
									 		'.$value['Ebook']['description'].'
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