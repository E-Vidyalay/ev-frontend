<div class="row radius">
	<?php echo $this->Element('information/information_latest_side');?>
	<div class="columns large-10" style="background: #fff;">
		<?php echo $this->Element('information/information_level_tab');?>
		
		<div class="row">
			<div class="columns large-12" id="vi-cont">
			<ul class="breadcrumbs">
				<li><?php 
				echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-home fa-fw'))." પ્રવેશદ્વાર",array('controller'=>'Pages','action'=>'home'),array('escape' => false));
				?></li>
				<li><?php 
				echo $this->Html->link("માહિતિ મિત્ર",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false));
				?></li>
				<li class="current"><?php echo $value['InformationPost']['title'];?></li>
			</ul>
			<div class="row"><div class="columns large-9">
			<?php
				$date=date('M j Y g:i a',strtotime($value['InformationPost']['updated_at']));
				echo "<div class='panel'>";
									echo "<h3>".$value['InformationPost']['title']."</h3>";
								echo "<div class='post-pane-body'>";
									echo $value['InformationPost']['meta_description'];
									echo '<ul class="postBylist">';
									echo '<li class="listitem"><i class="fa fa-clock-o fa-fw"></i>'.$date.'</li>';
									echo "<li class='listitem'><b>By</b> ".$value['Admin']['firstname']." ".$value['Admin']['lastname']."</li>";
									echo "<li class='listitem'><b><i class='fa fa-comments fa-fw'></i></b> ".count($comments)." Comments</li>";
									echo "<li class='listitem'><b><i class='fa fa-eye fa-fw'></i></b> ".$value['InformationPost']['views']." Views</li>";
									echo '<div class="right" align="right">';
									$link=$this->base."/InformationPosts/view_post/".$value['InformationPost']['id'];
									echo '&nbsp;&nbsp;';
									echo 'Share on: ';
									echo $this->SocialShare->fa(
										'facebook',
										$link
										);
									echo '&nbsp;&nbsp;';
									echo $this->SocialShare->fa(
										'twitter',
										$link
										);
									echo '</div>';
									echo '</ul>';
								echo "</div>";
							echo "</div>";
			?>
			<br/>
			 <div class="comments">
			 	<?php
				  	foreach ($comments as $key => $value) {
				  		echo "<div class='cmnt'>"."<span class='right'>".$value['InformationComment']['updated_at']."</span>".$value['InformationComment']['text']."<br/><b>".$value['InformationComment']['name']."</b>, ".$value['InformationComment']['email'];
						echo "<div id='replies_".$value['InformationComment']['id']."'>";
						if(count($replies)>0){
				  		foreach ($replies as $r) {
				  			if($r['InformationReply']['comment_id']==$value['InformationComment']['id']){
				  				echo "<div class='res'> Reply from - <b>".$r['InformationReply']['name']."</b>, ".$r['InformationReply']['email']."<br/>".$r['InformationReply']['text']."<span class='right'>".$r['InformationReply']['updated_at']."</span></div> ";
				  			}
				  		}
				  		}
				  		echo "</div>";
				  		echo "<a href='#' id='".$value['InformationComment']['id']."' class='reply-toggle right'>Leave reply</a>";
				  		echo "<br/>";
				  		echo "</div>";

				  		?>
			<?php echo '<div class="row comment-box" id="rep-'.$value['InformationComment']['id'].'">'; ?>
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
								echo $this->Form->create('InformationReply',array('id'=>'replyForm_'.$value['InformationComment']['id']));
								echo $this->Form->input('name',array('type'=>'hidden','id'=>'name_'.$value['InformationComment']['id'],'value'=>$activeUser['User']['name']));
								echo $this->Form->input('email',array('type'=>'hidden','id'=>'email_'.$value['InformationComment']['id'],'value'=>$activeUser['User']['username']));
								echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['InformationComment']['id']));	
							}
							else{
								echo $this->Form->create('InformationReply',array('id'=>'replyForm_'.$value['InformationComment']['id']));
								echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text','id'=>'name_'.$value['InformationComment']['id']));
								echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email','id'=>'email_'.$value['InformationComment']['id']));
								echo $this->Form->input('comment_id',array('type'=>'hidden','value'=>$value['InformationComment']['id']));
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
							
							'update'=>'#success','class'=>'button btn-rply-comment tiny radius','id'=>'btn_'.$value['InformationComment']['id']
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
				echo $this->Form->create('InformationComment',array('id'=>'InformationCommentGetForm'));
				echo $this->Form->input('name',array('type'=>'hidden','value'=>$activeUser['User']['name']));
				echo $this->Form->input('email',array('type'=>'hidden','value'=>$activeUser['User']['username']));
				echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$value['InformationPost']['id']));
			}
			else{
				echo $this->Form->create('InformationComment',array('id'=>'InformationCommentGetForm'));
				echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text'));
				echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email'));
				echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$value['InformationPost']['id']));
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
				
				'update'=>'#success','id'=>'btn2','class'=>'button tiny radius'
				 ));
			echo $this->Form->end();
		?>
					</div>
				</div>
			</div>
			</div>
			</div>
	</div>
</div>
			