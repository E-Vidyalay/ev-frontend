<div class="row" >
<div class="columns large-8 panel large-offset-2 medium-8 small-offset-1 small-10 medium-offset-2" style="background:#fff;padding:20px">
  <br/>
  <h3>Please add video details</h3>
  <hr>
  <?php
      echo $this->Form->create('Link',array('controller'=>'Links','url'=>'link_contribute'));
      echo $this->Form->input('uploaded_by',array('type'=>'hidden','value'=>$user_id));
      echo $this->Form->input('contributed',array('type'=>'hidden','value'=>1));
      echo $this->Form->input('topic_id',array(
        'class'=>'form-control',
        'options'=>$topic,
        'required',
        'empty'=>'Select Topic',
        'label'=>'Topic',
        'id'=>'topics'
      ));
      echo "<div id='sub-div-id'>";
        echo $this->Form->input('Link.sub_topic_id',array('type'=>'select','empty'=>'Select Sub topic','div'=>false,'label'=>'Sub Topic','class'=>'form-control'));
      echo "</div>";
      echo $this->Form->input('link_title',array(
         'class'=>'form-control',
         'type'=>'text',
         'required',
         'placeholder'=>'Title',
         'label'=>'Link Title'
     ));
    echo $this->Form->input('link_url',array(
      "type"=>"url",
      "placeholder"=>"Enter embeded url:https://www.youtube.com/embed/1UCOv74fL0s",
      "required"
    ));
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
          <?php echo $this->Form->input('tags',array('type'=>'textarea','id'=>'typingarea','class'=>'bigger','cols'=>'64','rows'=>'5','label'=>'Meta description'));?>
              <!-- <textarea id="typingarea" name="typingarea" rows="5" cols="64" class="bigger" spellcheck="false"></textarea> -->
        </td>
      </tr>
  </table>
  <?php
    echo $this->Form->input('Submit',array('type'=>'submit','class'=>'button tiny radius','div'=>false,'label'=>false));
  ?>
</div>
</div>
