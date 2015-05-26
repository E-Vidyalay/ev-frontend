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

    <div id="top-nav"> 
      <section id='top-section' class="hide-for-small hide-for-medium">
        <div class="row">
          <div class="columns large-6 left">

          </div>
          <div class="columns large-6" id="top-right">
            <!-- Write menu in reverse order-->
            <a href="#" data-reveal-id="login"><i class="fa fa-lock fa-fw"></i>Login</a>
            <a href="#" data-reveal-id="register"><i class="fa fa-pencil fa-fw"></i>Register</a>
            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-newspaper-o fa-fw')) . " News letter",array('controller'=>'NewsLetters','action'=>'index'),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " Vision",array('controller'=>'pages','action'=>'vision'),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bookmark-o fa-fw')) . " About EVidyalay",array('controller'=>'pages','action'=>'about_us'),array('escape' => false)); ?>
          </div>
        </div>
      </section>
      <section id="top-head" class="hide-for-small hide-for-medium">
        <?php echo $this->Html->image('ev-logo2.png',array('class'=>'brand-logo'));?>
        <span class="brand-name">ઈ-વિદ્યાલય</span>
        <ul class="right" id="top-menu">
          <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-home fa-fw')) . " પ્રવેશદ્વાર",array('controller'=>'pages','action'=>'home'),array('escape' => false)); ?></li>
          <li><a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false"><i class="fa fa-book fa-fw"></i>વિષય</a>
            <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
              <li><?php echo $this->Html->link('વિડીયો લાઇબ્રેરી',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('ગણિત',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('ગુજરાતી',array('controller'=>'pages','action'=>'index')); ?></li>

            </ul></li>
            <li><a data-dropdown="drop2" aria-controls="drop1" aria-expanded="false"><i class="fa fa-file fa-fw"></i>કેળવણી</a>
            <ul id="drop2" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
            <li><?php echo $this->Html->link('પ્રેરક જીવન ચરિત્રો',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('દેશભક્તિ',array('controller'=>'pages','action'=>'index')); ?></li>
            </ul></li>
             <li><a data-dropdown="drop3" aria-controls="drop1" aria-expanded="false"><i class="fa fa-edit fa-fw"></i>બાળ સાહિત્ય</a>
            <ul id="drop3" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
            <li><?php echo $this->Html->link('પ્રેરક જીવન ચરિત્રો',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('દેશભક્તિ',array('controller'=>'pages','action'=>'index')); ?></li>
            </ul></li>
            <li><a data-dropdown="drop4" aria-controls="drop1" aria-expanded="false"><i class="fa fa-institution fa-fw"></i>જ્ઞાન સાથે ગમ્મત</a>
            <ul id="drop4" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
            <li><?php echo $this->Html->link('પ્રેરક જીવન ચરિત્રો',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('દેશભક્તિ',array('controller'=>'pages','action'=>'index')); ?></li>
            </ul></li>
            <li><a data-dropdown="drop5" aria-controls="drop1" aria-expanded="false"><i class="fa fa-info fa-fw"></i>ઈ-વિદ્યાલય વિષે</a>
            <ul id="drop5" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
            <li><?php echo $this->Html->link('પ્રેરક જીવન ચરિત્રો',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('દેશભક્તિ',array('controller'=>'pages','action'=>'index')); ?></li>
            </ul></li>
            <li><a data-dropdown="drop6" aria-controls="drop1" aria-expanded="false"><i class="fa fa-search-plus fa-fw"></i>ઇવિદ્યાલય++</a>
            <ul id="drop6" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
            <li><?php echo $this->Html->link('પ્રેરક જીવન ચરિત્રો',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('દેશભક્તિ',array('controller'=>'pages','action'=>'index')); ?></li>
            </ul></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-arrow-circle-right fa-fw')) . " નવું",array('controller'=>'pages','action'=>'home'),array('escape' => false)); ?></li>
        </ul>
      </section>
    </div>
    <section class="main-section" >
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

  <a class="exit-off-canvas"></a>

  </div>
</div>
  <?php echo $this->Element('Dialogs');?>

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