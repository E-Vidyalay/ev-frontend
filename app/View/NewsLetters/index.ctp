<div class="row">
<div class="columns large-8 medium-10 small-10 large-offset-2 medium-offset-1 small-offset-1" style="background:#F0F0F0;">
	<?php 
		foreach ($news as $n) {
			$date=date('M j Y g:i a',strtotime($n['NewsLetter']['date']));
	?>
		<div class="row">
		<div class="columns " style="background:#fff;padding:10px">
			<h3><?php echo $n['NewsLetter']['title']; ?></h3>
			<hr/>
			<p style="text-align:justify">
				<?php echo $n['NewsLetter']['content']; ?>
			</p>
			<hr/>
			<?php echo $this->Html->image('user_avatar.png',array('class'=>'usr-img')); ?>
			<?php echo "<i style='font-size:13px'>".$n['Admin']['firstname']." ".$n['Admin']['lastname'].", <i class='fa fa-clock-o fa-fw'></i>".$date."</i>"; 
			echo '<div class="right" style="background:#fff;padding:10px" align="right">';
			$link=$this->base."/NewsLetters/sharenews/".$n['NewsLetter']['id'];
			$description=strip_tags($n['NewsLetter']['content']);
			echo '&nbsp;&nbsp;';
			echo 'Share on: ';
			echo $this->SocialShare->fa(
				'facebook',
				$link,
				array(
					'text' => $n['NewsLetter']['title'],
					'image' => 'http://frontend.evidyalay.net/img/ev-logo.png',
					'description' => $description
					)
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
	
	