<div class="row">
	<div class="columns large-8 large-offset-2">
		<div class="content-card small-12 small-offset-0">
			<h3>પ્રશ્નોત્તરી</h3>
			<h4 class="subheader"><small>ધોરણ:</small> <?php echo $standard['Standard']['name'];?></h4>
			<h4 class="subheader"><small>મૂળ પાઠ:</small> <?php echo $topic_full_name[0];?></h4>
		<hr/>
			<?php
				echo $this->Form->create('TestApplication',array('controller'=>'TestApplications','url'=>'test_sbt_post'));
				echo $this->Form->input('uid',array('type'=>'hidden','value'=>$activeUser['User']['id']));
				echo $this->Form->input('student_id',array('type'=>'hidden','value'=>$student_id));
				echo $this->Form->input('standard_id',array('type'=>'hidden','value'=>$standard_id));
				echo $this->Form->input('topic_id',array('type'=>'hidden','value'=>$topic_id));
				echo $this->Form->input('sub_topic_id',array('type'=>'select','options'=>$sub_topics,'label'=>'પેટા વિષયો','empty'=>'Select subject/topic','div'=>false));
				echo "<br/>";
				echo '<blockquote><h4 class="subheader"><b>નોંધ: </b></h4>';
				echo '<ul clasc="circle">
						<li>
							<h5>બધા પ્રશ્નો તેમના વ્યક્તિગત ગુણ ધરાવે છે</h5>
						</li>
						<li><h5>જો તમે સમગ્ર વિષય માટે ક્વિઝ આપવા માંગો છો, તો પછી Start પર ક્લિક કરો.</h5>
						</li>
						<li><h5>પ્રશ્નોની સંખ્યા: 10</h5></li>
						</ul>
						</blockquote>';
				echo "<div class='text-center'>";
				echo $this->Form->input('Start',array('type'=>'submit','div'=>false,'label'=>false,'class'=>'button small success radius'));
				echo '</div>'
			?>
			</form>
		</div>
	</div>
</div>
		