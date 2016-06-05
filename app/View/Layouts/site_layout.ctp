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
    echo $this->Html->css('responsive-tables');
    echo $this->Html->css('pramukhtypepad.css');
    echo $this->fetch('css');
    echo $this->Html->script('pramukhime.js');
    echo $this->Html->script('pramukhindic.js');
    echo $this->Html->script('pramukhime-common.js');
    echo $this->Html->meta('favicon.ico','/favicon.ico',array('type'=>'icon'));
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <script type="text/javascript">var baseUrl = '<?php echo $this->base; ?>';</script>
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script language="javascript" type="text/javascript">
      pramukhIME.addLanguage(PramukhIndic);
      pramukhIME.enable();
      pramukhIME.onLanguageChange(scriptChangeCallback);
      var lang = (getCookie('pramukhime_language',':english')).split(':');
      pramukhIME.setLanguage(lang[1], lang[0]);
      var ul = document.getElementById('pi_tips');

      var elem, len = ul.childNodes.length, i;
      for (i = 0; i < len; i++) {
          elem = ul.childNodes[i];
          if (elem.tagName && elem.tagName.toLowerCase() == 'li') {
              tips.push(elem.innerHTML);
          }
      }
      for (i = len - 1; i > 1; i--) {
          ul.removeChild(ul.childNodes[i]);
      }
      ul.childNodes[i].className = 'tip'; // replace small tip text with large

      showNextTip(); // call for first time
      setTimeout('turnOffTip()', 90000); // show tips for 1.5 minutes
            document.getElementById('typingarea').focus();

            // set width and height of dialog
            var w = window, d = document, e = d.documentElement, g = d.getElementsByTagName('body')[0], x = w.innerWidth || e.clientWidth || g.clientWidth, y = w.innerHeight || e.clientHeight || g.clientHeight;
            var elem = document.getElementById('dialog');
            elem.style.top = ((y - 550) / 2) + 'px';
            elem.style.left = ((x - 700) / 2) + 'px';
            
    </script>
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
var ids = [ "guj-in" ];  
  control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(onLoad);
    </script>
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap" style='position:relative;min-height:500px'>
    <?php
    //pr($activeUser);die();
      if(empty($activeUser['User'])){
            echo $this->Element('menu');
        }
        elseif($activeUser['User']['user_type']=='cb6f8154-fbbc-11e4-b148-01f8d649e9b6'){
           echo $this->Element('student_login');
        }
         else {
           echo $this->Element('profile_login');
         }
    ?>
    <section class="main-section" style="margin-top: -30px;">
      <!-- content goes here -->
        <div class="ev-alert">
            <?php
                echo $this->Session->flash('success');
                echo $this->Session->flash('error');
                echo $this->Session->flash('auth', array('params'=>array('class'=>'alert-box radius alert')));
            ?>
        </div>
        <div clas="row" id="main-content">
            <?php echo $content_for_layout; ?>
        </div>
    </section>
    <br/>
    <br/>
    <br/>
  <a class="exit-off-canvas"></a>
  </div>
  <?php
	echo $this->Element('footer');
	?>
</div>
  <?php echo $this->Element('Dialogs');
  ?>

  <?php
    echo $this->Html->script('vendor/modernizr');
    echo $this->Html->script('vendor/jquery');
    echo $this->Html->script('foundation.min');
    echo $this->Html->script('app');
    echo $this->Html->script('jquery.dataTables');
    echo $this->Html->script('jquery-min'); 
    echo $this->Html->script('jquery-scroll');
    echo $this->Html->script('responsive-tables');
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
        $('.dataTables_filter input').attr("id", "guj-in");
    });

  </script>
</body>
</html>