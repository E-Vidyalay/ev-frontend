<div class="row">

	<div class="columns large-8 large-offset-2 medium-10 medium-offset-1 small-12 panel" style="background:#fff">
	<br/>
	<h4>આપવામાં આવેલ પ્રશ્નોત્તરી પર તમારો રિપોર્ટ</h4>
	<hr/>
	<div style="background-color:<?php echo $level_color['Level']['color']; ?>;padding:5px 5px 5px 15px;">
	<h4 class="subheader" style="color:white;"><small style="color:white;">Test id:</small> <b><?php echo $test_meta['TestApplication']['id'];?></b></h4>
	<h4 class="subheader" style="color:white;"><small style="color:white;">ધોરણ:</small> <b><?php echo $test_meta['Standard']['name'];?></b></h4>
	<h4 class="subheader" style="color:white;"><small style="color:white;">મૂળ પાઠ:</small> <b><?php echo $test_meta['Topic']['display_name'];?></b></h4>
	<h4 class="subheader" style="color:white;"><small style="color:white;">સમય:</small> <b><?php 
		$date=date_create($test_meta['TestApplication']['date']);
		echo date_format($date,"jS F Y h:i:s A");?></b></h4>
		</div>
	<hr/>
	<table width="100%">
		<tr>
			<th>Total Marks</th>
			<th>Correct answer</th>
			<th>In-correct answer</th>
			<th>Unanswered</th>
			<th>Marks obtained</th>
		</tr>
		<tr>
			<td><?php echo $total; ?></td>
			<td><?php echo $correct_ans; ?></td>
			<td><?php echo $incorrect_ans; ?></td>
			<td><?php echo $unanswered; ?></td>
			<td><?php echo $obtained; ?></td>
		</tr>
	</table>

	</div>
</div>