<br/>
<div class="content-card panel small-10 small-offset-1" align="center">
	<br/>
		<h3 style="float:inherit;" align="center">What do you want to Contribute?</h3>
		<div class="large-4">
		<ul class="button-group round even-2">
			<li><?php echo $this->Html->link('E-book',array('controller' => 'Ebooks', 'action'=>'ebook_contribute' ),array('class' =>'button info' )); ?></li>
			<li><?php echo $this->Html->link('Video link',array('controller' => 'Links', 'action'=>'link_contribute' ),array('class' =>'button info' )); ?></li>
		</ul>
		<ul>
			<li>E-book where a Contributor can contribute content in the form of pdf.</li>
			<li>Video link where a Contributor can contribute youtube embeded video link.</li>
		</ul>
		<br/>
	</div>
</div>
