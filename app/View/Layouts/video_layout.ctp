<!DOCTYPE html>
<html>
<head>
  <title>ઈ-વિદ્યાલય</title>
  <?php
    echo $this->Html->css('normalize');
    echo $this->Html->css('foundation');
    echo $this->Html->css('font-awesome');
    echo $this->Html->css('app');
    echo $this->Html->css('jquery.dataTables');
    echo $this->fetch('css');
  ?>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });
      function onLoad() {     
  var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['gu'],        
          transliterationEnabled: true
        };  
     
var control = new google.elements.transliteration.TransliterationControl(options);  
var ids = [ "books"];  
  control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(onLoad);
    </script>
   <script type="text/javascript">var baseUrl = '<?php echo $this->base; ?>';</script>
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar hide-for-large hide-for-xlarge hide-for-xxlarge">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <div id="small">
        <?php echo $this->Html->image('ev-logo2.png',array('class'=>'brand-logo'));?>
        <span class="brand-name">ઈ-વિદ્યાલય</span>
        </div>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">

      </ul>
    </aside>

    <div class="user-nav"> 
      <section class="user-head hide-for-small hide-for-medium">
        <div class="row">
          <div class="columns large-3">
            <?php echo $this->Html->image('ev-logo2.png',array('class'=>'brand-logo'));?>
            <div class='pro-brand'>ઈ-વિદ્યાલય</div>
          </div>
          <div class="columns large-3 large-offset-1">
              <!-- <input type="text" id="search-bar" placeholder="Search" /> -->
          </div>
          <div class="columns large-4">
            <ul class="right" id="pro-menu">
            
            </ul>
          </div>
        </div>
      </section>
    </div>
    <section class="main-section" >
      <!-- content goes here -->
        <div class="ev-alert-pro">
            <?php
                echo $this->Session->flash('success');
                echo $this->Session->flash('error');
                echo $this->Session->flash('auth', array('params'=>array('class'=>'alert-box radius alert')));
            ?>
        </div>
        <div clas="row" id="main-content2">
            <?php echo $content_for_layout; ?>
        </div>
    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>

  <?php
    echo $this->Html->script('vendor/modernizr');
    echo $this->Html->script('vendor/jquery');
    echo $this->Html->script('foundation.min');
    echo $this->Html->script('app');   
    echo $this->Html->script('jquery.dataTables');    
    echo $this->fetch('script');
  ?>
  <script type="text/javascript">
    $(document).foundation();
    $(document).ready(function() {
        $('#example').DataTable({
          "oLanguage": {
              "sLengthMenu": "<span class='lengthLabel'>Entries per page:</span> _MENU_",
              "sSearch":""
          },
        });
        $('.dataTables_filter input').attr("placeholder", "Search");
        $('.dataTables_filter input').attr("id", "books");
    });

  </script>

</body>
</html>