<div class="row">

	<div class="large-6 columns large-offset-3" style="background:#fff">
	<h3>You reports for quiz on <?php echo $test_meta['Subject']['display_name'];?></h3>
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