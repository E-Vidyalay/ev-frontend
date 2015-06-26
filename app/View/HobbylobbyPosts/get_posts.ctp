
<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
	<?php echo "<a href='#' style='font-size:13px;padding:2px' class='hobby_fetch' id='".$tps['Hobby']['id']."'>".$tps['Hobby']['name']."</a> / ".$subHobby['SubHobby']['name'];
	 ?>
</div>
<?php
	if(count($posts)>0){
?>
<div class="row">
	<div class="columns large-3">
		<div class="ev-box-head">
			<?php echo $posts[0]['SubHobby']['name']; ?>
		</div>
		<div class='ev-pane'>
		<ul class='vis' id='posts'>
		<?php
		foreach ($posts as $key => $value) {
			echo "<li><a href='#' id='".$value['HobbylobbyPost']['id']."'>".$value['HobbylobbyPost']['title']."</a></li>";
		}
			
		?>
		</ul>
		</div>
	</div>
	<div class="columns large-9">
		<div class='urls-embed'>
			<?php
				echo "<div class='post-pane'>";
								echo "<div class='post-pane-heading'>";
									echo $posts[0]['HobbylobbyPost']['title'];
								echo "</div>";
								echo "<div class='post-pane-body'>";
									echo $posts[0]['HobbylobbyPost']['meta_description'];
								echo "</div>";
								echo "<div class='post-pane-heading'>";
									echo "<b>For </b>".$posts[0]['Level']['level_name'].", <b>By</b> ".$posts[0]['Admin']['name'];
								echo "</div>";
							echo "</div>";
							?>
			<br/>
			 <div class="comments">
			 	<?php
				  	foreach ($comments as $key => $value) {
				  		echo "<div class='cmnt'>"."<span class='right'>".$value['HobbylobbyComment']['updated_at']." </span> ".$value['HobbylobbyComment']['text']."<br/><b>".$value['HobbylobbyComment']['name']."</b>, ".$value['HobbylobbyComment']['email'];
						echo "<div id='replies_".$value['HobbylobbyComment']['id']."'>";
						if(count($replies)>0){
				  		foreach ($replies as $r) {
				  			if($r['HobbylobbyReply']['comment_id']==$value['HobbylobbyComment']['id']){
				  				echo "<div class='res'> Reply from - <b>".$r['HobbylobbyReply']['name']."</b>, ".$r['HobbylobbyReply']['email']."<br/>".$r['HobbylobbyReply']['text']."<span class='right'>".$r['HobbylobbyReply']['updated_at']."</span></div> ";
				  			}
				  		}
				  		}
				  		echo "</div>";
				  		echo "<a href='#' id='".$value['HobbylobbyComment']['id']."' class='reply-toggle right'>Leave reply</a>";
				  		echo "<br/>";
				  		echo "</div>";

				  		?>
			<?php echo '<div class="row comment-box" id="rep-'.$value['HobbylobbyComment']['id'].'">'; ?>
				<div class="columns large-12" >
					<div class="panel" style="padding:15px">
					<h5> Write Reply</h5>
					<hr/>
					   <?php echo $this->Html->script('jquery', FALSE); ?> 
						<?php echo $this->Html->script('validation', FALSE); ?>
		
  						<div id="ev-success"></div>
							<?php 
							echo $this->Form->create('HobbylobbyReply',array('id'=>'replyForm_'.$value['HobbylobbyComment']['id']));
							echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text','id'=>'name_'.$value['HobbylobbyComment']['id']));
							echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email','id'=>'email_'.$value['HobbylobbyComment']['id']));
							echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['HobbylobbyComment']['id']));
						?>
						<table cellpadding="3" cellspacing="0" border="1" class="editor">
				    		<tr class="editortoolbar" >
				        	<td ><div style="width:30% !important;" class="iconflex"> <select id="drpLanguage"
								onchange="javascript:changeLanguage(this.options[this.selectedIndex].value);" 
								name="drpLanguage" title="Choose Language" class="big" style="width:100%">
								<option value='pramukhindic:gujarati'>Gujarati</option>
								<option value='pramukhindic:hindi'>Hindi</option>

								<option value=":english" selected="selected">English (F9)</option>
								</select></div>
				               
				        	</td>
				    		</tr>
				            <tr>
				                <td>
				                <?php echo $this->Form->input('text',array('type'=>'textarea','id'=>'typingarea','class'=>'bigger','cols'=>'64','rows'=>'5'));?>
				                <!-- <textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea> --></td>
				            </tr>
				        </table>

					<?php
						  echo $this->Js->submit('Post', array(
							
							'update'=>'#success','class'=>'button btn-rply-comment tiny radius','id'=>'btn_'.$value['HobbylobbyComment']['id']
							 ));
						echo $this->Form->end();
					?>
					</div>
				</div>
			</div>
			<?php
				  	}
			?>
			</div>
<button class='cmt-toggle button success tiny radius'>Leave comment</button> 
			<div class="row comment-box " id="cmt-bx">
				<div class="columns large-12" >
					<div class="panel" style="padding:15px">
					<h5> Write Comment</h5>
					<hr/>
					   <?php echo $this->Html->script('jquery', FALSE); ?> 
<?php echo $this->Html->script('validation', FALSE); ?>
		
  <div id="ev-success"></div>
			<?php 
			echo $this->Form->create('HobbylobbyComment',array('id'=>'HobbylobbyCommentGetForm'));
			echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text'));
			echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email'));
			echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$posts[0]['HobbylobbyPost']['id']));
		?>
		<table cellpadding="3" cellspacing="0" border="1" class="editor">
    		<tr class="editortoolbar" >
        	<td ><div style="width:30% !important;" class="iconflex"> <select id="drpLanguage"
				onchange="javascript:changeLanguage(this.options[this.selectedIndex].value);" 
				name="drpLanguage" title="Choose Language" class="big" style="width:100%">
				<option value='pramukhindic:gujarati'>Gujarati</option>
				<option value='pramukhindic:hindi'>Hindi</option>

				<option value=":english" selected="selected">English (F9)</option>
				</select></div>
               
        	</td>
    		</tr>
            <tr>
                <td>
                <?php echo $this->Form->input('text',array('type'=>'textarea','id'=>'typingarea','class'=>'bigger','cols'=>'64','rows'=>'5'));?>
                <!-- <textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea> --></td>
            </tr>
        </table>

		<?
			  echo $this->Js->submit('Post', array(
				
				'update'=>'#success','id'=>'btn1','class'=>'button tiny radius'
				 ));
			echo $this->Form->end();
		?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
else{
	echo "<h5> Sorry there are no posts available currently</h5>";
}
?>