<div class="row">
	
		

		<div class="columns large-8 large-offset-2" style="background:#fff;padding:10px">
			<h3><?php echo $news['NewsLetter']['title']; ?></h3>
			<hr/>
			<p style="text-align:justify">
				<?php echo $news['NewsLetter']['content']; ?>
			</p>
			<hr/>
			<?php echo $this->Html->image('user_avatar.png',array('class'=>'usr-img')); ?>
			<?php echo "<i style='font-size:13px'>".$news['Admin']['username'].", at-".$news['NewsLetter']['date']."</i>"; ?>
		</div>
	
	

	
</div>