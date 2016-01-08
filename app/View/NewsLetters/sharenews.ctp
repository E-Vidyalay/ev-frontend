<?php if($news!=NULL){?>
<div class="row">
<?php $date=date('M j Y h:m:s',strtotime($news['NewsLetter']['date']));?>
		<div class="columns large-8 large-offset-2" style="background:#fff;padding:10px">
			<h3><?php echo $news['NewsLetter']['title']; ?></h3>
			<hr/>
			<p style="text-align:justify">
				<?php echo $news['NewsLetter']['content']; ?>
			</p>
			<hr/>
			<?php echo $this->Html->image('user_avatar.png',array('class'=>'usr-img')); ?>
			<?php echo "<i style='font-size:13px'>".$news['Admin']['username'].", <i class='fa fa-clock-o fa-fw'></i>".$date."</i>"; 
			echo '<div class="right" style="background:#fff;padding:10px" align="right">';
			$link=$this->base."/NewsLetters/sharenews/".$news['NewsLetter']['id'];
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
			?>
		</div>	
</div>
<?php }
else{?>
<div class="row">
		<div class="columns large-8 large-offset-2" style="background:#fff;padding:10px">
			<h3>Sorry The Post Must be Deleted</h3>
		</div>	
</div>

<?php }?>