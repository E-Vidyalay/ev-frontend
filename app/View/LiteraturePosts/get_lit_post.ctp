<?php	
	if(count($values)>0){
		foreach ($values as $key => $value) {
			$date=date('M j Y g:i a',strtotime($value['LiteraturePost']['updated_at']));
			echo "<div class='panel'>";
					echo "<a class='get-lit-post' id=".$value['LiteraturePost']['id']."><h3 class='read-link'>".$value['LiteraturePost']['title']."</h3></a>";
				echo "<div class='post-pane-body'>";
					echo $value['LiteraturePost']['meta_description'];
							echo '<ul class="postBylist">';
									echo '<li class="listitem"><i class="fa fa-clock-o fa-fw"></i>'.$date.'</li>';
							echo "<li class='listitem'><b>For </b>".$value['Level']['level_name']."</li><li class='listitem'><b>By</b> ".$value['Admin']['firstname']." ".$value['Admin']['lastname']."</li>";
							echo '</ul>';
					echo "</div>";
				echo "</div>";	
		}
	}
	else{
		echo '<h5>No Post are availabe</h4>';
	}
?>