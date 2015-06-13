<br/>
<div class="row radius">
	<div class="columns large-2 latest-pane">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<ul style="list-style:square;font-size:13px;">
			<?php
				if(count($latest)>0){
					foreach ($latest as $key => $value) {
						echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$value['Ebook']['id']."/".$value['Ebook']['path']."'>".$value['Ebook']['name']." : ".$value['Literature']['name']." - ".$value['SubLiterature']['name']." ( ".$value['Level']['level_name'].")</a></li> ";
					}	
				}
				else{
					for($i=0;$i<2;$i++){
						echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$latest[$i]['Ebook']['id']."/".$latest[$i]['Ebook']['path']."'>".$latest[$i]['Ebook']['name']." : ".$latest[$i]['Literature']['name']." - ".$latest[$i]['SubLiterature']['name']." ( ".$latest[$i]['Level']['level_name'].")</a></li> ";
					}
				}
				
			?>	
		</ul>
	</div>
	<div class="columns large-10" style="background: #fff;">
		<div class="row">
			<div class="columns large-6">
				<ul class="lt-menu">
					<li style="color:#fff;background:#619919;border-radius:1px;"><i class="fa fa-female"></i>&nbsp;&nbsp;બાલમંદિર</li>
					<li style="color:#fff;background:#dc6800;border-radius:1px;"><i class="fa fa-user"></i>&nbsp;&nbsp;પ્રાથમિક</li>
					<li style="color:#fff;background:#008BBB;border-radius:1px;"><i class="fa fa-users"></i>&nbsp;&nbsp;માધ્યમિક</li>
					<li style="color:#fff;background:#FBA714;border-radius:1px;"><i class="fa fa-user-md"></i>&nbsp;&nbsp;ઉચ્ચ માધ્યમિક</li>
				</ul>
			</div>
			<div class="columns large-6">
				<li class='has-sub-menu-lit right lit-cat'>
	              <a style="font-size:14px">Select category &nbsp;<i class='fa fa-angle-down'> </i></a>
	              <ul class='sub-menu-lit'>
	               	<?php
	               		foreach($lit as $l){
	               			echo "<li><a>".$l['Literature']['name']."</a></li>";
	               		}
	               	?>
	              </ul>
	            </li>
			</div>
		</div>
		<div class="row cat-content">
			<div class="columns large-12">
				<div class="panel callout" style="padding:0.25rem">
					<ul class='slit-list'>
						<?php
							foreach ($slit as $key => $value) {
								echo "<li><a>".$value['SubLiterature']['name']."</a></li>";
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="columns large-12">
			<table id="example" class="display" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		            <th>Book Name</th>
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
							echo "<td>".$value['Literature']['name']."</td>";
							echo "<td>".$value['SubLiterature']['name']."</td>";
							echo "<td>".$value['Level']['level_name']."</td>";
							echo "<td>";
								echo "<a target='_blank' href='".$admin_url."/files/ebook/path/".$value['Ebook']['id']."/".$value['Ebook']['path']."' class='book-link'>Read book</a>";
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
	</div>
</div>
