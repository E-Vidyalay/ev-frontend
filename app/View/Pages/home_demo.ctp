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
		echo '';
		echo '<div class="level-div" style="background-color:'.$value['Level']['color'].'">';
		echo '<br/>';
		echo '<br/>';
		if($value['Level']['id']=="5568340b-2a04-474b-9568-326f125f2f23"){
			echo '<div align="center">';
			echo '<i class="center kindergarden sprite-60659-200"></i></div>';
		}
		else if($value['Level']['id']=="1308ef4a-1275-11e5-84c6-418bf323d4bd"){
			echo '<div align="center">';
			echo '<i class="primary-edu sprite-60659-200"></i>
			</div>';
		}
		else if($value['Level']['id']=="1308da82-1275-11e5-84c6-418bf323d4bd"){
			echo '<div align="center">';
			echo '<i class="second-edu sprite-60659-200"></i></div>';
		}
		else if($value['Level']['id']=="557d45e1-c154-48a1-91cb-01b9125f2f23"){
			echo '<div align="center">';
			echo '<i class="high-second-edu sprite-60659-200"></i></div>';
		}
		echo '<h4 align="center" style="color:white;">'.$value['Level']['level_name'].'</h4>';
		echo '<div class="overlay" style="background-color:'.$value['Level']['color'].'">
				<ul>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-play-circle-o fa-fw')) . " વિડિઓઝ",array('controller'=>'Pages','action'=>'latest_video',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
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