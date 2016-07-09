<div class="row">
<div class="columns large-8">
<div class='ev-box-head'>
    <?php echo $links['Link']['link_title'];?>
  </div>
  <?php
  	echo '<div class="flex-video">';
    echo '<iframe width="100%" height="415" src="'.$links['Link']['link_url'].'" frameborder="0" allowfullscreen style="padding:15px;border:1px solid #dfdfdf;"></iframe></div>';
  ?>
</div>
<div class="columns large-4">
<div style="padding:15px;border:1px solid #dfdfdf;">
<h5><b>Links Details:</b></h5>
<?php echo $links['Link']['tags'];?>
<br/>
<br/>
<h7><b>Video Belongs to Category:</b></h7>
<br/>

<?php 
if($links['SubTopic']['id']!=NULL){
	echo $links['Topic']['display_name'].' - '.$links['SubTopic']['name'];	
}
else{
	echo $links['Topic']['display_name'];	
}
?>
<br/>
<br/>
<h7><b>Uploaded By:</b> <?php 
if($links['Link']['contributed']==0){
	echo $uploader['Admin']['firstname']." ".$uploader['Admin']['lastname'];	
}
else{
	echo $uploader['User']['name'];		
}
?></h7>
<br/>
<br/>
<?php echo '<i class="fa fa-comments fa-fw"></i>'.count($comments).' Comments';?>
<br/>
<br/>
<?php echo '<i class="fa fa-eye fa-fw"></i>'.$links['Link']['views'].' Views';?>
</div></div>
</div>
<br/>
  	<div class="comments">
			 	<?php
				  	foreach ($comments as $key => $value) {
				  		echo "<div class='cmnt'>"."<span class='right'>".$value['VideoComment']['updated_at']." </span> ".$value['VideoComment']['comment']."<br/><b>".$value['VideoComment']['name']."</b>, ".$value['VideoComment']['email'];
						echo "<div id='replies_".$value['VideoComment']['id']."'>";
						if(count($replies)>0){
				  		foreach ($replies as $r) {
				  			if($r['VideoReply']['comment_id']==$value['VideoComment']['id']){
				  				echo "<div class='res'> Reply from - <b>".$r['VideoReply']['name']."</b>, ".$r['VideoReply']['email']."<br/>".$r['VideoReply']['reply']."<span class='right'>".$r['VideoReply']['updated_at']."</span></div> ";
				  			}
				  		}
				  		}
				  		echo "</div>";
				  		echo "<a href='#' id='".$value['VideoComment']['id']."' class='reply-toggle right'>Leave reply</a>";
				  		echo "<br/>";
				  		echo "</div>";

				  		?>
			<?php echo '<div class="row comment-box" id="rep-'.$value['VideoComment']['id'].'">'; ?>
				<div class="columns large-12" >
					<div class="panel" style="padding:15px">
					<h5> Write Reply</h5>
					<hr/>
					   <?php echo $this->Html->script('jquery', FALSE); ?> 
						<?php echo $this->Html->script('validation', FALSE); ?>
		
  						<div id="ev-success"></div>
							<?php 
							if($activeUser){
								echo 'Logged in as '.$activeUser['User']['name'];
								echo $this->Form->create('VideoReply',array('id'=>'replyForm_'.$value['VideoComment']['id']));
								echo $this->Form->input('name',array('type'=>'hidden','id'=>'name_'.$value['VideoComment']['id'],'value'=>$activeUser['User']['name']));
								echo $this->Form->input('email',array('type'=>'hidden','id'=>'email_'.$value['VideoComment']['id'],'value'=>$activeUser['User']['username']));
								echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['VideoComment']['id']));	
							}
							else{
								echo $this->Form->create('VideoReply',array('id'=>'replyForm_'.$value['VideoComment']['id']));
								echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text','id'=>'name_'.$value['VideoComment']['id']));
								echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email','id'=>'email_'.$value['VideoComment']['id']));
								echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['VideoComment']['id']));
							}
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
				                <?php echo $this->Form->input('reply',array('type'=>'textarea','id'=>'typingarea','class'=>'bigger','cols'=>'64','rows'=>'5'));?>
				                <!-- <textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea> --></td>
				            </tr>
				        </table>

					<?php
						  echo $this->Js->submit('Reply', array(
							
							'update'=>'#success','class'=>'button btn-rply tiny radius','id'=>'btn_'.$value['VideoComment']['id']
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
			if($activeUser){
				echo 'Logged in as '.$activeUser['User']['name'];
				echo $this->Form->create('VideoComment',array('id'=>'VideoCommentGetVideoForm'));
				echo $this->Form->input('name',array('type'=>'hidden','value'=>$activeUser['User']['name']));
				echo $this->Form->input('email',array('type'=>'hidden','value'=>$activeUser['User']['username']));
				echo $this->Form->input('video_id',array('type'=>'hidden','value'=>$links['Link']['id']));	
			}
			else{
				echo $this->Form->create('VideoComment',array('id'=>'VideoCommentGetVideoForm'));
				echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text'));
				echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email'));
				echo $this->Form->input('video_id',array('type'=>'hidden','value'=>$links['Link']['id']));
			}
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
                <?php echo $this->Form->input('comment',array('type'=>'textarea','id'=>'typingarea','class'=>'bigger','cols'=>'64','rows'=>'5'));?>
                <!-- <textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea> --></td>
            </tr>
        </table>

		<?
			  echo $this->Js->submit('Comment', array(
				
				'update'=>'#success','id'=>'btn','class'=>'button tiny radius'
				 ));
			echo $this->Form->end();
		?>
		</div>
	</div>
</div>

