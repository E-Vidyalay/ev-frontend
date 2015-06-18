
  <div class='ev-box-head'>
    <?php echo $links['Link']['link_title'];?>
  </div>
  <?php
    echo '<iframe width="100%" height="415" src="'.$links['Link']['link_url'].'" frameborder="0" allowfullscreen style="padding:15px;"></iframe>';
  ?>
<div class="row">
	<div class="columns large-12" >
		<div class="panel callout" style="padding:15px">
		<h5> Leave Comment</h5>
		<hr/>
		<form method="post">
			<input type="text" placeholder="Name" name="Name" required />
			<input type="email" placeholder="Email" name="Email" required />
			<?php echo "<input type='hidden' value='".$links['Link']['id']."'/>"; ?>
			<table cellpadding="3" cellspacing="0" border="1" class="editor">
    		<tr class="editortoolbar" >
        	<td ><div class="iconflex"> <select id="drpLanguage"
				onchange="javascript:changeLanguage(this.options[this.selectedIndex].value);" 
				name="drpLanguage" title="Choose Language" class="big" style="width:100%">
				<option value='pramukhindic:gujarati'>Gujarati</option>
				<option value='pramukhindic:hindi'>Hindi</option>

				<option value=":english" selected="selected">English (F9)</option>
				</select></div>
               
        	</td>
    		</tr>
            <tr>
                <td><textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea></td>
            </tr>
        	</table>
		</form>
		</div>
	</div>
</div>