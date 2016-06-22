<?php 
	if($if_topic_data){
		echo $this->Form->input('TestApplication.topic_id',array('type'=>'select','options'=>$subjects,'required','label'=>'મુખ્ય વિષય','empty'=>'Select મુખ્ય વિષય','div'=>false));
		echo "<br/>";
				echo "<div class='text-center'>";
				echo $this->Form->button('આગળ વધો  <i class="fa fa-arrow-right"></i>',array('type'=>'submit','div'=>false,'label'=>false,'class'=>'button small radius'));
				echo "</div>";
	}
	else{
		echo '<h5>ક્વિઝ આ ધોરણ માટે ઉપલબ્ધ નથી</h5>';
	}
?>