<div class="row radius">
	<?php echo $this->Element('literature/literature_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('literature/literature_level_tab');?>
		<div id="sub_lit">
		<?php echo $this->Element('literature/literature_cat_tab');?>
		<div class="row">
			<div class="columns large-12" id="li-ebooks">
			<table id="example" class="display" cellspacing="0" width="100%">
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
											echo "<a target='_blank' href='".$admin_url."files/ebook/path/".$value['Ebook']['id']."/".$value['Ebook']['path']."' class='book-link button tiny'>Read book</a>";
										}
										else{
											echo "<a target='_blank' href='".$this->webroot."files/ebook/path/".$value['Ebook']['id']."/".$value['Ebook']['path']."' class='book-link button tiny'>Read book</a>";
										}
												echo '<a href="#" class="book-desc button tiny info" data-reveal-id="md-'.$value['Ebook']['id'].'">Read book description</a>

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
