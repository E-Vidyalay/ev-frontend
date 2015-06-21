<div class="row">
<div class="columns large-8 large-offset-2" style="background:#F0F0F0;padding:10px">
	<?php 
		foreach ($news as $n) {
	?>
		<div class="row">
		<div class="columns" style="background:#fff;padding:10px">
			<h3><?php echo $n['NewsLetter']['title']; ?></h3>
			<hr/>
			<p style="text-align:justify">
				<?php echo $n['NewsLetter']['content']; ?>
			</p>
			<hr/>
			<?php echo $this->Html->image('user_avatar.png',array('class'=>'usr-img')); ?>
			<?php echo "<i style='font-size:13px'>".$n['Admin']['username'].", at-".$n['NewsLetter']['date']."</i>"; 
			echo '<div class="right" style="background:#fff;padding:10px" align="right">';
			$link=$this->base."/NewsLetters/sharenews/".$n['NewsLetter']['id'];
			echo '&nbsp;&nbsp;';
			echo 'Share on: ';
			echo $this->SocialShare->fa(
				'facebook',
				$link
				);
			echo '&nbsp;&nbsp;';
			echo $this->SocialShare->fa(
				'twitter',
				$link
				);
			echo '</div>';
			?>
		
		</div>
		</div>
		<div class="row">
		<div class="columns" style="background:#F0F0F0;padding:10px">
		</div>
		</div>
		<?php
		}
	?>
	</div>
</div>
	
	
