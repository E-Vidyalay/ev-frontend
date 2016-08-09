<div class="row radius">
	<?php echo $this->Element('literature_post/literature_post_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('literature_post/literature_post_level_tab');?>
		<div id="sub_lit">
		<?php echo $this->Element('literature_post/literature_post_cat_tab');?>
		<div class="row ">
			<div class="columns large-9 post-content" id="li-LiteraturePosts">
		<?php
			$date=date('M j Y g:i a',strtotime($value['LiteraturePost']['updated_at']));
			echo "<div class='panel'>";
					echo "<h3>".$value['LiteraturePost']['title']."</h3>";
				echo "<div class='post-pane-body'>";
					echo $value['LiteraturePost']['meta_description'];
					echo '<ul class="postBylist">';
						echo '<li class="listitem"><i class="fa fa-clock-o fa-fw"></i>'.$date.'</li>';
						echo "<li class='listitem'><b>For </b>".$value['Level']['level_name']."</li><li class='listitem'><b>By</b> ".$value['Admin']['firstname']." ".$value['Admin']['lastname']."</li>";
						echo '<li class="listitem"><i class="fa fa-comments fa-fw"></i>'.count($comments).' Comments</li>';
						echo '<li class="listitem"><i class="fa fa-eye fa-fw"></i>'.$value['LiteraturePost']['views'].' Views</li>';
						echo '</ul>';
						echo '<ul class="postBylist">';
									echo '<li class="listitem">';
									$link=$this->base."/LiteraturePosts/get_post/".$value['LiteraturePost']['id'];
									echo 'Share on: ';
									echo '</li>';
									echo '<li class="listitem">';
									$description=strip_tags($value['LiteraturePost']['meta_description']);
									echo $this->SocialShare->fa(
										'facebook',
										$link,
										array(
											'text' => $value['LiteraturePost']['title'],
											'image' => 'http://frontend.evidyalay.net/img/ev-logo.png',
											'description' => $description
											)
										);
									echo '</li>';
									echo '<li class="listitem">';
									echo $this->SocialShare->fa(
										'twitter',
										$link,
										array(
											'text' => $value['LiteraturePost']['title'],
											)
										);
									echo '</li>';
									echo '<li class="listitem visible-for-small-only">';
									echo $this->SocialShare->fa(
										'whatsapp',
										$link,
										array(
												'text' => $value['LiteraturePost']['title']
											)
										);
									echo '</li>';
						echo '</ul>';
				echo "</div>";
			echo "</div>";	
		?>

		  	<div class="comments">
					 	<?php
						  	foreach ($comments as $key => $value) {
						  		echo "<div class='cmnt'>"."<span class='right'>".$value['LiteratureComment']['updated_at']." </span> ".$value['LiteratureComment']['comment']."<br/><b>".$value['LiteratureComment']['name']."</b>, ".$value['LiteratureComment']['email'];
								echo "<div id='replies_".$value['LiteratureComment']['id']."'>";
								if(count($replies)>0){
						  		foreach ($replies as $r) {
						  			if($r['LiteratureReply']['comment_id']==$value['LiteratureComment']['id']){
						  				echo "<div class='res'> Reply from - <b>".$r['LiteratureReply']['name']."</b>, ".$r['LiteratureReply']['email']."<br/>".$r['LiteratureReply']['reply']."<span class='right'>".$r['LiteratureReply']['updated_at']."</span></div> ";
						  			}
						  		}
						  		}
						  		echo "</div>";
						  		echo "<a href='#' id='".$value['LiteratureComment']['id']."' class='reply-toggle right'>Leave reply</a>";
						  		echo "<br/>";
						  		echo "</div>";

						  		?>
					<?php echo '<div class="row comment-box" id="rep-'.$value['LiteratureComment']['id'].'">'; ?>
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
										echo $this->Form->create('LiteratureReply',array('id'=>'replyForm_'.$value['LiteratureComment']['id']));
										echo $this->Form->input('name',array('type'=>'hidden','id'=>'name_'.$value['LiteratureComment']['id'],'value'=>$activeUser['User']['name']));
										echo $this->Form->input('email',array('type'=>'hidden','id'=>'email_'.$value['LiteratureComment']['id'],'value'=>$activeUser['User']['username']));
										echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['LiteratureComment']['id']));
									}
									else{
										echo $this->Form->create('LiteratureReply',array('id'=>'replyForm_'.$value['LiteratureComment']['id']));
										echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text','id'=>'name_'.$value['LiteratureComment']['id']));
										echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email','id'=>'email_'.$value['LiteratureComment']['id']));
										echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['LiteratureComment']['id']));
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
									
									'update'=>'#success','class'=>'button btn-rply-lit tiny radius','id'=>'btn_'.$value['LiteratureComment']['id']
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
						echo $this->Form->create('LiteratureComment',array('id'=>'VideoCommentGetVideoForm'));
						echo $this->Form->input('name',array('type'=>'hidden','value'=>$activeUser['User']['name']));
						echo $this->Form->input('email',array('type'=>'hidden','value'=>$activeUser['User']['username']));
						echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$value['LiteraturePost']['id']));
					}
					else{
						echo $this->Form->create('LiteratureComment',array('id'=>'VideoCommentGetVideoForm'));
						echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text'));
						echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email'));
						echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$value['LiteraturePost']['id']));
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

				<?php
					  echo $this->Js->submit('Comment', array(
						
						'update'=>'#success','id'=>'btn-lit-post','class'=>'button tiny radius'
						 ));
					echo $this->Form->end();
				?>
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
		<div class="loading">
			<i class="fa fa-spinner fa-spin fa-3x"></i>
		</div>
	</div>
</div>