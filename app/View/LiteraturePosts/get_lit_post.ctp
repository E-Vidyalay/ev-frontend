<?php	
	if(count($values)>0){
		foreach ($values as $key => $value) {
			$date=date('M j Y',strtotime($value['LiteraturePost']['updated_at']));
			echo "<div class='post-pane'>";
				echo "<div class='post-pane-heading'>";
					echo $value['LiteraturePost']['title'];
				echo "</div>";
				echo "<div class='post-pane-body'>";
					echo $value['LiteraturePost']['meta_description'];
				echo "</div>";
					echo "<div class='post-pane-heading'>";
							echo '<ul class="postBylist">';
									echo '<li class="listitem"><i class="fa fa-calendar fa-fw"></i>'.$date.'</li>';
							echo "<li class='listitem'><b>For </b>".$value['Level']['level_name']."</li><li class='listitem'><b>By</b> ".$value['Admin']['name']."</li>";
							echo "<span class='right'><a class='read-link get-lit-post' id='".$value['LiteraturePost']['id']."'>Read more</a></span>";
							echo '</ul>';
					echo "</div>";
				echo "</div>";	
		}
	}
	else{
		echo '<h5>No Post are availabe</h4>';
	}
?>