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
</head>
<body>
<!-- <div class="lit-top">
</div> -->
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

    <div class="user-nav"> 
      <section class="user-head hide-for-small hide-for-medium">
        <div class="row">
          <div class="columns large-3">
            <?php echo $this->Html->image('ev-logo2.png',array('class'=>'brand-logo'));?>
            <div class='pro-brand'>ઈ-વિદ્યાલય</div>
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
    echo $this->fetch('script');
  ?>
</body>
</html>