<div class="row">
	<div class="columns large-9 hide-for-small hide-for-medium">
		<ul class="vi-menu hl">
			
		</ul>
	</div>
	<div class="columns large-3 hide-for-small hide-for-medium">
		<li class='has-sub-menu-lit right lit-cat' style="font-size:13px">
		  <?php
		  	echo $this->Html->link("View all",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false));
		  ?>
        </li>
	</div>
	<div class="columns large-9 hide-for-large-up">
		<ul class="vi-menu hl">
			<li class='has-sub-menu-lit lit-cat' style="font-size:13px">
			  <?php
			  	echo $this->Html->link(" View all",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false));
			  ?>
        </li>
		</ul>
	</div>
</div>