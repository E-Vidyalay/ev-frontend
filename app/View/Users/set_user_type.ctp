<div class="row">
	<div class="columns large-8 large-offset-2">
		<div class="content-card">
		<h4>Welcome, please complete your profile for further activities </h4>
		<hr/>
		<div class="row">
			<div class="colums large-8 large-offset-2 panel">
				<?php
					echo $this->Form->create('User',array('type'=>'file','controller'=>'users','url'=>'set_user_type'));
					echo $this->Form->input('id',array('type'=>'hidden','value'=>$uid));
					if(empty($activeUser['User']['name'])){
						echo "<h6> Your name </h6>";
						echo $this->Form->input('name',array('type'=>'text','placeholder'=>'Name','required','label'=>false));
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
							<?php echo $this->Form->input('path',array('type'=>'file','label'=>false,'id'=>'imgInp')); 
							echo $this->Html->image('user_avatar.png',array('id'=>'blah','class'=>'usr-img-preview'));?>
						</div>
					</div>
					<hr/>
				<?php
					}
					echo $this->Form->input('Proceed',array('type'=>'submit','class'=>'button small primary radius','label'=>false,'div'=>false));
					echo $this->Form->end();
				?>
			</div>
		</div>
		</div>
	</div>
</div>
		