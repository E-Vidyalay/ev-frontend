<br/>
<br/>
<div class="content-card large-12 small-12 large-offset-0 small-offset-0">
	<div class="row">
		<div class="columns large-2 large-offset-0">
			<div class="columns large-2 latest-pane" style="width: 100%;">
				<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
				<div class="seperator"></div>
				<ul class="side-nav" style="color:white;">
					<?php foreach ($levels as $key => $value) {
						// pr($value);
						echo '<li style="background-color:'.$value['Level']['color'].'">'.$this->Html->link($value['Level']['level_name']." ઈ-બૂક",array('controller'=>'Pages','action'=>'latest_ebook',$value['Level']['id']),array('style'=>'color:white;')).'</li>';
					}?>
					<li><?php echo $this->Html->link("View all",array('controller'=>'Literatures','action'=>'index'),array('style'=>'color:white;'));?></li>
				</ul>
			</div>	
		</div>
		<div class="columns large-10 large-offset-0">
			<div class="row">
	<h3 class="head-navu">નવા ઇ-બુક</h3>
	</div>
	<div class="row">
	<div class="columns large-12 large-offset-0">
		  <?php
		  if(!empty($books)){ 
		  	for ($i=0;$i<sizeof($books);$i++) {
		  		if($i<10){?>
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
										echo "<tr>";
											echo "<td>".$books[$i]['Ebook']['name']."</td>";
											if($books[$i]['Ebook']['author']!=null){
												echo "<td>".$books[$i]['Ebook']['author']."</td>";
											}
											if($books[$i]['Ebook']['compiler']!=null){
												echo "<td>".$books[$i]['Ebook']['compiler']."</td>";
											}
											
											if($books[$i]['Ebook']['with_translation']==1){
												echo "<td>અંગ્રેઝી અનુવાદ ઉપલબ્ધ છે.</td>";
											}
											else{
												echo "<td>અંગ્રેઝી અનુવાદ ઉપલબ્ધ નથી.</td>";
											}
											if($books[$i]['Ebook']['with_picture']==1){
												echo "<td>ચિત્રો ઉપલબ્ધ છે.</td>";
											}
											else{
												echo "<td>ચિત્રો ઉપલબ્ધ નથી.</td>";
											}
											echo "<td>".$books[$i]['Literature']['name']."</td>";
											echo "<td>".$books[$i]['SubLiterature']['name']."</td>";
											echo "<td>".$books[$i]['Level']['level_name']."</td>";
											echo "<td>";
												if($books[$i]['Ebook']['contributed']==0){
													echo "<a target='_blank' href='".$admin_url."files/ebook/path/".$books[$i]['Ebook']['id']."/".$books[$i]['Ebook']['path']."' class='book-link'>Read book</a>";
												}
												else{
													echo "<a target='_blank' href='".$this->webroot."files/ebook/path/".$books[$i]['Ebook']['id']."/".$books[$i]['Ebook']['path']."' class='book-link'>Read book</a>";
												}
												echo "<br>";
												echo "<br>";
													echo '<a href="#" class="book-desc" data-reveal-id="md-'.$books[$i]['Ebook']['id'].'">Read book description</a>

													<div id="md-'.$books[$i]['Ebook']['id'].'" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
													 <br/>
													 <h4>Book Description</h4>
													 <hr/>
													 	<div class="book-d radius">
													 		'.$books[$i]['Ebook']['description'].'
													 	</div>
													  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
													</div>';
											echo "</td>";
										echo "</tr>";
								?>
							</tbody>
							</table>
							</div>
						</div>
					
		  			<?php
				}
		  	}
		  }
		  	else{
		  		echo '<br/><br/><h4 align="center">કોઈ નવી ઇ-બુક ઉપલબ્ધ નથી</h4>
		  				<br/><br/>';
		  	}
		  ?>
	</div>
	</div>	
	
		</div>
	</div>
</div>	