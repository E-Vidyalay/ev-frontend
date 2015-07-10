<br/>
<br/>
<div class="content-card" id="home-content">
<div class="row">
<h3 class="head-navu">વિશિષ્ટ તત્વો</h3>
</div>
	<div class="row">
	<?php
		foreach ($levels as $key => $value) {
	
		echo '<div class="columns large-3">';
		echo '<div class="level-div" style="background-color:'.$value['Level']['color'].'">';
		echo '<h2 align="center" style="color:white; margin-top:60px;">'.$value['Level']['level_name'].'</h2>';
		echo '<div class="overlay" style="background-color:'.$value['Level']['color'].'">
				<ul>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-play-circle-o fa-fw')) . " વિડીયો લાઇબ્રેરી",array('controller'=>'Pages','action'=>'latest_video',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-smile-o fa-fw')) . " હોબીલોબી",array('controller'=>'Pages','action'=>'latest_post',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-book fa-fw')) . " ઈ-બૂક",array('controller'=>'Pages','action'=>'latest_ebook',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil-square fa-fw')) . " સાહિત્ય લેખ",array('controller'=>'Pages','action'=>'latest_lekh',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
				</ul>
			</div>';
		echo '</div>';
		echo '</div>'; 	
		 } 
	?>
	</div>
	<br/>
</div>