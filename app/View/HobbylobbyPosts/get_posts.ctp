<div class="row radius">
	<?php echo $this->Element('hobbylobby/hobbylobby_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('hobbylobby/hobbylobby_level_tab');?>
		<div id="sub_lit">

		<div class="row">
			<div class="columns large-12" id="vi-cont">
			<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
				<?php 
					echo $this->Html->link($tps['Hobby']['name'],array('controller'=>'HobbylobbyPosts','action'=>'get_sub_hobby',$tps['Hobby']['id'],$lid),array('escape' => false));
					echo ' / '.$subHobby['SubHobby']['name'];
				 ?>
			</div>
			<?php
				if(count($shbposts)>0){
			?>
			<div class="row">
				<div class="columns large-3">
					<div class="ev-box-head">
						<?php echo $shbposts[0]['SubHobby']['name']; ?>
					</div>
					<div class='ev-pane'>
					<ul class='vis' id='posts'>
					<?php
					foreach ($shbposts as $key => $value) {
						echo "<li><a href='#' id='".$value['HobbylobbyPost']['id']."'>".$value['HobbylobbyPost']['title']."</a></li>";
					}
						
					?>
					</ul>
					</div>
				</div>
				<div class="columns large-9">
					<div class='urls-embed'>
						<?php
							// echo "<div class='post-pane'>";
											$date=date('M j Y, g:i a',strtotime($shbposts[0]['HobbylobbyPost']['updated_at']));
											echo "<div class='panel'>";
											// echo "<div class='post-pane-heading'>";
											echo "<h3>".$shbposts[0]['HobbylobbyPost']['title']."</h3>";
											// echo "</div>";
											echo "<div class='post-pane-body'>";
												echo $shbposts[0]['HobbylobbyPost']['meta_description'];
											// echo "</div>";
											// echo "<div class='post-pane-heading'>";
												echo '<ul class="postBylist">';
												echo '<li class="listitem"><i class="fa fa-clock-o fa-fw"></i>'.$date.'</li>';
												echo "<li class='listitem'><b>For </b>".$shbposts[0]['Level']['level_name']."</li><li class='listitem'><b>By</b> ".$shbposts[0]['Admin']['firstname']." ".$shbposts[0]['Admin']['lastname']."</li>";
												echo "<li class='listitem'><b><i class='fa fa-comments fa-fw'></i></b>".count($comments)." Comments</li>";
												echo "<li class='listitem'><b><i class='fa fa-eye fa-fw'></i></b>".$views." Views</li>";
												echo '</ul>';
												echo '<ul class="postBylist">';
										echo '<li class="listitem">';
										$link=$this->base."/HobbylobbyPosts/view_post/".$shbposts[0]['HobbylobbyPost']['id'];
										echo 'Share on: ';
										echo '</li>';
										echo '<li class="listitem">';
										$description=strip_tags($shbposts[0]['HobbylobbyPost']['meta_description']);
										// pr($description);
										echo $this->SocialShare->fa(
											'facebook',
											$link,
											array(
												'text' => $shbposts[0]['HobbylobbyPost']['title'],
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
												'text' => $shbposts[0]['HobbylobbyPost']['title']
											)
											);
										echo '</li>';
										echo '<li class="listitem visible-for-small-only">';
										echo $this->SocialShare->fa(
											'whatsapp',
											$link,
											array(
													'text' => $shbposts[0]['HobbylobbyPost']['title']
												)
											);
										echo '</li>';
									echo '</ul>';
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
										if($activeUser){
											echo 'Logged in as '.$activeUser['User']['name'];
											echo $this->Form->create('HobbylobbyReply',array('id'=>'replyForm_'.$value['HobbylobbyComment']['id']));
											echo $this->Form->input('name',array('type'=>'hidden','id'=>'name_'.$value['HobbylobbyComment']['id'],'value'=>$activeUser['User']['name']));
											echo $this->Form->input('email',array('type'=>'hidden','id'=>'email_'.$value['HobbylobbyComment']['id'],'value'=>$activeUser['User']['username']));
											echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['HobbylobbyComment']['id']));
										}else{
											echo $this->Form->create('HobbylobbyReply',array('id'=>'replyForm_'.$value['HobbylobbyComment']['id']));
											echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text','id'=>'name_'.$value['HobbylobbyComment']['id']));
											echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email','id'=>'email_'.$value['HobbylobbyComment']['id']));
											echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['HobbylobbyComment']['id']));	
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
							                <?php echo $this->Form->input('text',array('type'=>'textarea','id'=>'typingarea','class'=>'bigger','cols'=>'64','rows'=>'5'));?>
							                <!-- <textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea> --></td>
							            </tr>
							        </table>

								<?php
									  echo $this->Js->submit('Reply', array(
										
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
						if($activeUser){
							echo 'Logged in as '.$activeUser['User']['name'];
							echo $this->Form->create('HobbylobbyComment',array('id'=>'HobbylobbyCommentGetForm'));
							echo $this->Form->input('name',array('type'=>'hidden','value'=>$activeUser['User']['name']));
							echo $this->Form->input('email',array('type'=>'hidden','value'=>$activeUser['User']['username']));
							echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$shbposts[0]['HobbylobbyPost']['id']));
						}
						else{
							echo $this->Form->create('HobbylobbyComment',array('id'=>'HobbylobbyCommentGetForm'));
							echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text'));
							echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email'));
							echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$shbposts[0]['HobbylobbyPost']['id']));
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
			                <?php echo $this->Form->input('text',array('type'=>'textarea','id'=>'typingarea','class'=>'bigger','cols'=>'64','rows'=>'5'));?>
			                <!-- <textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea> --></td>
			            </tr>
			        </table>

					<?php
						  echo $this->Js->submit('Comment', array(
							
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
			</div>
		</div>
		</div>
	</div>
</div>