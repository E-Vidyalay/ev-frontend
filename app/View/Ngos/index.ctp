<div class="row radius">
	<div class="row" style="background:#fff;padding:20px">
			<div class="columns large-12" id="li-ebooks">
			<table id="example" class="display" cellspacing="0" width="100%">
		    <thead>
		        <tr>
		            <th>Name</th>
		            <th>Description</th>
		            <th>Address</th>
		            <th>Contact Number</th>
		            <th>Email</th>
		            <th>Website</th>
		            <th>Prospectus</th>
		        </tr>
		    </thead>
			<tbody>
				<?php
					foreach ($ngos as $key => $value) {
						echo "<tr>";
							echo "<td>".$value['Ngo']['name']."</td>";
							echo "<td>".$value['Ngo']['description']."</td>";
							echo "<td>".$value['Ngo']['address']."</td>";
							echo "<td>".$value['Ngo']['contact_number']."</td>";
							echo "<td>".$value['Ngo']['email']."</td>";
							echo "<td><a href='".$value['Ngo']['site_url']."'>".$value['Ngo']['site_url']."</a></td>";
							echo "<td>";
								echo "<a target='_blank' href='".$admin_url."/files/ngo/path/".$value['Ngo']['id']."/".$value['Ngo']['path']."' class='book-link'>Read Prospectus</a>";
									/*echo'<div id="md-'.$value['Ngo']['id'].'" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
									 <br/>
									</div>';*/
							echo "</td>";
						echo "</tr>";
					}
				?> 
			</tbody>
			</table>			
			</div>
	</div>
	
</div>