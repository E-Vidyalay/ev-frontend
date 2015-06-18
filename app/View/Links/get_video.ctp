
  <div class='ev-box-head'>
    <?php echo $links['Link']['link_title'];?>
  </div>
  <?php
    echo '<iframe width="100%" height="415" src="'.$links['Link']['link_url'].'" frameborder="0" allowfullscreen style="padding:15px;"></iframe>';
  ?>
  <div class="comments">
  <?php
  	foreach ($comments as $key => $value) {
  		echo "<div class='panel'><p>".$value['VideoComment']['comment']."</p><hr/><b>".$value['VideoComment']['name']."</b>, ".$value['VideoComment']['email']."<span class='right'>".$value['VideoComment']['updated_at']."</span></div> ";
  	}
  ?>
  </div>
<div class="row">
	<div class="columns large-12" >
		<div class="panel callout" style="padding:15px">
		<h5> Leave Comment</h5>
		<hr/>
		   <?php echo $this->Html->script('jquery', FALSE); ?> 
<?php echo $this->Html->script('validation', FALSE); ?>
		
  <div id="ev-success"></div>
			<?php 
			echo $this->Form->create('VideoComment',array('id'=>'VideoCommentGetVideoForm'));
			echo $this->Form->input('name',array('required'=>'required','placeholder'=>'Name','type'=>'text'));
			echo $this->Form->input('email',array('required'=>'required','placeholder'=>'Email','type'=>'email'));
			echo $this->Form->input('video_id',array('type'=>'hidden','value'=>$links['Link']['id']));
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
			  echo $this->Js->submit('Post', array(
				
				'update'=>'#success','id'=>'btn','class'=>'button tiny radius'
				 ));
			echo $this->Form->end();
		?>
		</div>
	</div>
</div>