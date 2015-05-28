<!DOCTYPE html>
<html>
<head>
  <title>ઈ-વિદ્યાલય</title>
  <?php
    echo $this->Html->css('normalize');
    echo $this->Html->css('foundation');
    echo $this->Html->css('font-awesome');
    echo $this->Html->css('app');
    echo $this->fetch('css');
  ?>
  <script type="text/javascript" language="javascript">  
    function disableBackButton()
    {
    window.history.forward()
    } 
    disableBackButton(); 
    window.onload=disableBackButton(); 
    window.onpageshow=function(evt) { if(evt.persisted) disableBackButton() } 
    window.onunload=function() { void(0) } 

    function my_onkeydown_handler() {
        switch (event.keyCode) {
            case 116 : // 'F5'
                event.preventDefault();
                event.keyCode = 0;
                window.status = "F5 disabled";
                break;
        }
    }
    document.addEventListener("keydown", my_onkeydown_handler);
  </script>
</head>
<body onkeydown="noBack()">
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
        <li><label>Foundation</label></li>
        <li><a href="#">The Psychohistorians</a></li>
        <li><a href="#">...</a></li>
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
            <li>
              <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" id='usr-a'><?php 
              if(empty($activeUser['User']['path'])){
                  echo $this->Html->image('user_avatar.png',array('class'=>'usr-img'));
              }
              else{
                echo '<img src="'.$this->webroot.'files/user/path/'.$activeUser['User']['id'].'/small_'.$activeUser['User']['path'].'" class="usr-img"/ > ';
              }
                  ?> &nbsp;&nbsp;<?php echo $activeUser['User']['name']; ?></a>
              <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
                <li><?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout')); ?></li>

              </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
    <section class="user-menu hide-for-small hide-for-medium">
      <ul>
          <li><?php echo $this->Html->link('Dashboard',array('controller'=>'students','action'=>'home'));?></li>
          <li><a href="#">Courses</a></li>
          <li><?php echo $this->Html->link('Apply for quiz !',array('controller'=>'students','action'=>'test_application',$activeUser['User']['id']));?></li>
      </ul>    
    </section>
    <section class="main-section" >
      <!-- content goes here -->
        <div class="ev-alert-pro">
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
      $(document).ready(function(){
        window.history.forward(-1);
      });
  </script>
</body>
</html>