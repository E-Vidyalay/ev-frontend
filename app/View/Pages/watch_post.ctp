<div class="row">
<div class="columns large-12 post-content">
<?php
				$date=date('M j Y',strtotime($post['HobbylobbyPost']['updated_at']));
				echo "<div class='panel'>";
						echo "<h3>".$post['HobbylobbyPost']['title']."</h3>";
					echo "<div class='post-pane-body'>";
						echo $post['HobbylobbyPost']['meta_description'];
					echo "</div>";
						echo '<ul class="postBylist">';
						echo '<li class="listitem"><i class="fa fa-calendar fa-fw"></i>'.$date.'</li>';
						echo "<li class='listitem'><b>For </b>".$post['Level']['level_name']."</li><li class='listitem'><b>By</b> ".$post['Admin']['firstname']." ".$post['Admin']['lastname']."</li>";
						echo '<li class="listitem"><i class="fa fa-comments fa-fw"></i>'.count($comments).' Comments</li>';
						echo '<li class="listitem"><i class="fa fa-eye fa-fw"></i>'.$post['HobbylobbyPost']['views'].' Views</li>';
						echo '</ul>';
						echo '<ul class="postBylist">';
				echo '<li class="listitem">';
				$link=$this->base."/HobbylobbyPost/view_post/".$post['HobbylobbyPost']['id'];
				echo 'Share on: ';
				echo '</li>';
				echo '<li class="listitem">';
				$description=strip_tags($post['HobbylobbyPost']['meta_description']);
				echo $this->SocialShare->fa(
					'facebook',
					$link,
					array(
						'text' => $post['HobbylobbyPost']['title'],
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
						'text' => $post['HobbylobbyPost']['title']
					)
					);
				echo '</li>';
				echo '<li class="listitem visible-for-small-only">';
				echo $this->SocialShare->fa(
					'whatsapp',
					$link,
					array(
							'text' => $post['HobbylobbyPost']['title']
						)
					);
				echo '</li>';
			echo '</ul>';
				echo "</div>";
			?>
			<br/>
			 <div class="comments">
			 	<?php
				  	foreach ($comments as $key => $value) {
				  		echo "<div class='cmnt'>"."<span class='right'>".$value['HobbylobbyComment']['updated_at']." </span>".$value['HobbylobbyComment']['text']."<br/><b>".$value['HobbylobbyComment']['name']."</b>, ".$value['HobbylobbyComment']['email'];
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
							}
							else{
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
				// pr($activeUser);
				echo 'Logged in as '.$activeUser['User']['name'];
				echo $this->Form->create('HobbylobbyComment',array('id'=>'HobbylobbyCommentGetForm'));
				echo $this->Form->input('name',array('type'=>'hidden','value'=>$activeUser['User']['name']));
				echo $this->Form->input('email',array('type'=>'hidden','value'=>$activeUser['User']['username']));
				echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$post['HobbylobbyPost']['id']));
			}
			else{
				echo $this->Form->create('HobbylobbyComment',array('id'=>'HobbylobbyCommentGetForm'));
				echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text'));
				echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email'));
				echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$post['HobbylobbyPost']['id']));	
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
			