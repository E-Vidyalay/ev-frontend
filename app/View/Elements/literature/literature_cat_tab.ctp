<div class="row cat-content">
	<div class="columns large-12">
		<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
			<ul id='slit-list'>
				<?php
					foreach ($slit as $key => $value) {
						echo "<li>";
						echo $this->Html->link($value['SubLiterature']['name'],array('controller'=>'Literatures','action'=>'get_sublit_book',$value['SubLiterature']['id']),array('escape' => false));
						echo "</li>";
					}
				?>
			</ul>
		</div>
	</div>
</div>