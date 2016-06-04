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
					if(count($books)>0){
					foreach ($books as $key => $value) {
						echo "<tr>";
							echo "<td>".$value['Ebook']['name']."</td>";
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
					}
					else{
						echo'<tr class="odd"><td class="dataTables_empty" colspan="5" valign="top">No books found</td></tr>';
					}
				?>
			</tbody>
