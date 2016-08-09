<div class="row radius">
	<?php echo $this->Element('links/links_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('links/link_level_tab');?>
		<div id="sub_lit">
		<div class="row">
			<div class="columns large-12" id="vi-cont">
				<div id="sub_cat_list" class="panel callout" style="padding:0.25rem">
					<?php 
						echo $this->Html->link($tps['Subject']['name'],array('controller'=>'Links','action'=>'get_topics',$tps['Subject']['id'],$tps['Topic']['level_id']),array('escape' => false,'style'=>'font-size:13px;padding:2px')).' / ';
						echo $this->Html->link($tps['Topic']['name'],array('controller'=>'Links','action'=>'get_sub_topics',$tps['Topic']['id']),array('escape' => false,'style'=>'font-size:13px'));
					 ?>
				</div>
				<?php
					if(count($links)>0){
				?>
				<div class="row">
					<div class="columns large-3">
						<div class="ev-box-head">
							<?php echo $links[0]['SubTopic']['name']; ?>
						</div>
						<div class='ev-pane'>
						<ul class='vis' id='videos'>
						<?php
						foreach ($links as $key => $value) {
							echo "<li>";
							echo "<a href='#' id='".$value['Link']['id']."'>".$value['Link']['link_title']."</a>";
							echo "</li>";
						}
							
						?>
						</ul>
						</div>
					</div>
					<div class="columns large-9">
						<div class='urls-embed'>
							<div class='ev-box-head'>
								<?php echo $links[0]['Link']['link_title'];?>
							</div>
							<?php
								echo '<div class="flex-video">';
								echo '<iframe width="100%" height="415" src="'.$links[0]['Link']['link_url'].'" frameborder="0" allowfullscreen style="padding:15px;border:1px solid #dfdfdf;"></iframe></div>';
							?>
							<div style="padding:15px;border:1px solid #dfdfdf;">
								<h5><b>Links Details:</b></h5>
								<?php echo $links[0]['Link']['tags'];?>
								<h7><b>Video Belongs to Category:</b></h7>
								<br/>

								<?php 
								if($links[0]['SubTopic']['id']!=NULL){
									echo $links[0]['Topic']['display_name'].' - '.$links[0]['SubTopic']['name'];	
								}
								else{
									echo $links[0]['Topic']['display_name'];	
								}
								?>
								<br/>
								<br/>
								<h7><b>Uploaded By:</b> <?php 
								if($links[0]['Link']['contributed']==0){
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
								<?php echo '<i class="fa fa-eye fa-fw"></i>'.$views.' Views';?>
								<br/>
								<br/>
								<?php 
								echo '<ul class="postBylist">';
										echo '<li class="listitem">';
										$link=$this->base."/Links/view_video/".$links[0]['Link']['id'];
										echo 'Share on: ';
										echo '</li>';
										echo '<li class="listitem">';
										$myArray=explode('/', $links[0]['Link']['link_url']);
										$description=strip_tags($links[0]['Link']['tags']);
										echo $this->SocialShare->fa(
											'facebook',
											$link,
											array(
												'text' => $links[0]['Link']['link_title'],
												'image' => 'http://img.youtube.com/vi/'.$myArray[4].'/0.jpg',
												'description' => $description
											)
											);
										echo '</li>';
										echo '<li class="listitem">';
										echo $this->SocialShare->fa(
											'twitter',
											$link,
											array(
												'text' => $links[0]['Link']['link_title']
											)
											);
										echo '</li>';
										echo '<li class="listitem visible-for-small-only">';
										echo $this->SocialShare->fa(
											'whatsapp',
											$link,
											array(
													'text' => $links[0]['Link']['link_title']
												)
											);
										echo '</li>';
									echo '</ul>';
								?>
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
								echo $this->Form->input('video_id',array('type'=>'hidden','value'=>$links[0]['Link']['id']));	
							}
							else{
								echo $this->Form->create('VideoComment',array('id'=>'VideoCommentGetVideoForm'));
								echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text'));
								echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email'));
								echo $this->Form->input('video_id',array('type'=>'hidden','value'=>$links[0]['Link']['id']));
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
								
								'update'=>'#success','id'=>'btn','class'=>'button tiny radius'
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
					echo "<h5> Sorry there are no videos available currently</h5>";
				}
				?>
				</div>
			</div>
			<div class="loading">
				<i class="fa fa-spinner fa-spin fa-3x"></i>
			</div>
		</div>
	</div>
</div>