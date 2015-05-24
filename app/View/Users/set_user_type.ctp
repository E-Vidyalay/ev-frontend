<div class="row">
	<div class="columns large-8 large-offset-2">
		<div class="content-card">
		<h4>Welcome, please complete your profile for further activities </h4>
		<hr/>
		<div class="row">
			<div class="colums large-8 large-offset-2 panel">
				<?php 
					echo $this->Form->create('User',array('controller'=>'users','action'=>'set_user_type','type'=>'file'));
					echo $this->Form->input('id',array('type'=>'hidden','value'=>$activeUser['User']['id']));
					if(empty($activeUser['User']['name'])){
						echo "<h6> Your name </h6>";
						echo $thi->Form->input('id',array('type'=>'text','placeholder'=>'Name','required'));
						echo "<hr/>";
					}
					echo "<h6> Select user type:</h6>";
					echo $this->Form->input('user_type',array(
						'options'=>$typeList,
						'required',
						'label'=>false,
					));
					if(empty($activeUser['User']['path'])){
					?>
					<hr/>
					<h6> Upload your profile picture </h6>
					<div class="row">
						<div class="columns large-9">
							<?php echo $this->Form->input('path',array('type'=>'file','label'=>false)); ?>
						</div>
					</div>
					<hr/>
				<?php
					echo $this->Form->input('Proceed',array('type'=>'submit','class'=>'button small primary radius','label'=>false,'div'=>false));
					}
				?>
			</div>
		</div>
		</div>
	</div>
</div>
		