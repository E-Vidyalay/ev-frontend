<!DOCTYPE html>
<html>
<head>
  <title>ઈ-વિદ્યાલય</title>
  <?php
    echo $this->Html->css('normalize');
    echo $this->Html->css('foundation');
    echo $this->Html->css('font-awesome');
    echo $this->Html->css('app');
    echo $this->Html->script('pramukhime.js');
    echo $this->Html->script('pramukhindic.js');
    echo $this->Html->script('pramukhime-common.js');
    echo $this->Html->css('pramukhtypepad.css');
    echo $this->fetch('css');
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        <li><label><?php
                if(empty($activeUser['User']['path'])){
                    echo $this->Html->image('user_avatar.png',array('class'=>'usr-img'));
                }
                else{
                  echo '<img src="'.$this->webroot.'files/user/path/'.$activeUser['User']['id'].'/small_'.$activeUser['User']['path'].'" class="usr-img"/ > ';
                }
                    ?> &nbsp;&nbsp;<?php echo $activeUser['User']['name']; ?></label></li>
        <li><?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout')); ?></li>
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
              <input type="text" id="search-bar" placeholder="Search" />
          </div>
          <div class="columns large-4">
            <ul class="right" id="pro-menu">
            <li class='has-sub-menu'>
              <a id='usr-a'><?php
                if(empty($activeUser['User']['path'])){
                    echo $this->Html->image('user_avatar.png',array('class'=>'usr-img'));
                }
                else{
                  echo '<img src="'.$this->webroot.'files/user/path/'.$activeUser['User']['id'].'/small_'.$activeUser['User']['path'].'" class="usr-img"/ > ';
                }
                    ?> &nbsp;&nbsp;<?php echo $activeUser['User']['name']; ?>
              </a>
              <ul class='sub-menu'>
                <li><?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout')); ?></li>

              </ul>
            </li>
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
                echo $this->Session->flash('auth', array('params'=>array('class'=>'alert alert-danger')));
            ?>
        </div>
        <div clas="row" id="main-content">
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
    echo $this->fetch('script');
  ?>
  <script type="text/javascript">
      $(document).foundation();
  </script>
</body>
</html>
