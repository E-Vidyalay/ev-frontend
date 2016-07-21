<div class="columns large-2 latest-pane hide-for-small hide-for-medium" style="position: fixed;width: 200px;">
		<h6 style="text-align:center"> <i class="fa fa-book"></i>&nbsp;&nbsp;નવું</h6>
		<div class="seperator"></div>
		<div class="list">
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
				else if(count($latest_books)>=2){
					for($i=0;$i<2;$i++){
						if($book[$i]['Ebook']['contributed']==0){
							echo "<li style='padding-top:5px;'><a target='_blank' href='".$admin_url."/files/ebook/path/".$latest_books[$i]['Ebook']['id']."/".$latest_books[$i]['Ebook']['path']."'>".$latest_books[$i]['Ebook']['name']." : ".$latest_books[$i]['Literature']['name']." - ".$latest_books[$i]['SubLiterature']['name']." ( ".$latest_books[$i]['Level']['level_name'].")</a></li> ";
						}
						else{
							echo "<li style='padding-top:5px;'><a target='_blank' href='".$this->webroot."files/ebook/path/".$latest_books[$i]['Ebook']['id']."/".$latest_books[$i]['Ebook']['path']."'>".$latest_books[$i]['Ebook']['name']." : ".$latest_books[$i]['Literature']['name']." - ".$latest_books[$i]['SubLiterature']['name']." ( ".$latest_books[$i]['Level']['level_name'].")</a></li> ";
						}
					}
				}
				else{
					echo "<a style='font-size:15px;color:#fff;cursor: default;'>કઈ નવું ઉપલબ્ધ નથી</a> ";
				}


			?>
		</ul>
		</div>
	</div>