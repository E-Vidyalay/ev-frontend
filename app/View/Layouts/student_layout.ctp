<!DOCTYPE html>
<html>
<head>
  <title>ઈ-વિદ્યાલય</title>
  <?php
    echo $this->Html->css('normalize');
    echo $this->Html->css('foundation');
    echo $this->Html->css('app');
    echo $this->fetch('css');
  ?>
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
        <li><label>Foundation</label></li>
        <li><a href="#">The Psychohistorians</a></li>
        <li><a href="#">...</a></li>
      </ul>
    </aside>

    <div> 
      <section id='top-section' class="hide-for-small hide-for-medium">
        <div class="row">
          <div class="columns large-6 left">

          </div>
          <div class="columns large-6" id="top-right">
            <!-- Write menu in reverse order-->
            <a class="button" data-dropdown="accountDropdown" aria-controls="accountDropdown" aria-expanded="false">Account</a>
          </div>
        </div>
      </section>
      <ul id="accountDropdown" class="f-dropdown" data-dropdown-content tabindex="-1" aria-hidden="true" aria-autoclose="false" tabindex="-1">

              <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fi-torso')) . "&nbsp;&nbsp;Logout",array('controller' => 'Students', 'action' => 'logout'),array('escape' => false)); ?></li>
      </ul>
      <section id="top-head" class="hide-for-small hide-for-medium">
        <?php echo $this->Html->image('ev-logo2.png',array('class'=>'brand-logo'));?>
        <span class="brand-name">ઈ-વિદ્યાલય</span>
        <ul class="right" id="top-menu">
          <li><a>Home</a></li>
          <li><a>About us</a></li>
          <li><a>Contact us</a></li>
        </ul>
      </section>
    </div>
    <section class="main-section" >
      <!-- content goes here -->
        <div clas="row" id="main-content">
            <?php echo $content_for_layout; ?>
        </div>
    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>


  <?php
    echo $this->Html->script('jquery-1.11.0');
    echo $this->Html->script('vendor/modernizr');
    echo $this->Html->script('vendor/jquery');
    echo $this->Html->script('foundation.min');
    echo $this->Html->script('remove-alert');
    echo $this->fetch('script');
  ?>
  <?php 
                    echo $this->Session->flash('success');
                    echo $this->Session->flash('error');
                    echo $this->Session->flash('auth', array('params'=>array('class'=>'alert-box alert radius')));
                ?>
  <script type="text/javascript">
      $(document).foundation();
  </script>
</body>
</html>