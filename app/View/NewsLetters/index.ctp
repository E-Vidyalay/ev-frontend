<div class="row">
	<?php 
		foreach ($news as $n) {
	?>
		<div class="columns large-8 large-offset-2" style="background:#fff;padding:10px">
			<h3><?php echo $n['NewsLetter']['title']; ?></h3>
			<hr/>
			<p style="text-align:justify">
				<?php echo $n['NewsLetter']['content']; ?>
			</p>
			<hr/>
			<?php echo $this->Html->image('user_avatar.png',array('class'=>'usr-img')); ?>
			<?php echo "<i style='font-size:13px'>".$n['Admin']['username'].", at-".$n['NewsLetter']['date']."</i>"; ?>
		</div>
	<?php
		}
	?>
	
</div>