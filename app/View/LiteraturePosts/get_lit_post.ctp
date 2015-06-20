<?php	
	if(count($values)>0){
		foreach ($values as $key => $value) {
			echo "<div class='post-pane'>";
				echo "<div class='post-pane-heading'>";
					echo $value['LiteraturePost']['title'];
				echo "</div>";
				echo "<div class='post-pane-body'>";
					echo $value['LiteraturePost']['meta_description'];
				echo "</div>";
					echo "<div class='post-pane-heading'>";
							echo "<b>For </b>".$value['Level']['level_name'].", <b>By</b> ".$value['Admin']['name'];
							echo "<span class='right'><a class='read-link get-lit-post' id='".$value['LiteraturePost']['id']."'>Read more</a></span>";
					echo "</div>";
				echo "</div>";	
		}
	}
	else{
		echo '<h5>No Post are availabe</h4>';
	}
?>