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
  <script src="https://apis.google.com/js/client:platform.js" async defer></script>
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
        <li><label>ઈ-વિદ્યાલય</label></li>
        <li><a href="#">Student's Profile</a></li>
        <li><a href="#">Dashboard</a></li>
         <li class="has-submenu"><a href="#">The Psychohistorians</a>
            <ul class="left-submenu">
                <li class="back"><a href="#">Back</a></li>
                <li><label>Level 1</label></li>
                <li><a href="#">Link 1</a></li>
                <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                    <ul class="left-submenu">
                        <li class="back"><a href="#">Back</a></li>
                        <li><label>Level 2</label></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>
                <li><a href="#">...</a></li>
            </ul>
        </li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fi-torso')) . "&nbsp;&nbsp;Logout",array('controller' => 'Students', 'action' => 'logout'),array('escape' => false)); ?></li>
      </ul>
    </aside>
<div class="fixed">
    <nav class="top-bar user-top-nav hide-for-small hide-for-medium" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <?php echo $this->Html->image('ev-logo2.png',array('class'=>'brand-logo-user'));?>
    </li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="#">Dashboard</a></li>
      <li class="divider"></li>
      <li class="has-dropdown">
        <a href="#">Notification</a>
        <ul class="dropdown">
          <li><a href="#">Tests</a></li>
          <li><a href="#">Teachers</a></li>
          <li class="divider"></li>
        </ul>
      </li>
      <li class="has-dropdown active">
        <a href="#">Account</a>
        <ul class="dropdown">
          <li><a href="#">Profile</a></li>
          <li class="active"><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fi-torso')) . "&nbsp;&nbsp;Logout",array('controller' => 'Students', 'action' => 'logout'),array('escape' => false)); ?></li>
          <li class="divider"></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li id="list-left"><span href="#">ઈ-વિદ્યાલય</span></li>
      <li id="search-bar" class="has-form">
  <div class="row collapse">
    <div class="large-8 small-9 columns">
      <input type="text" placeholder="Find Stuff">
    </div>
    <div class="large-4 small-3 columns">
      <a href="#" class="button expand">Search</a>
    </div>
  </div>
</li>
    </ul>

  </section>
</nav>
</div >

<div id="sub-tab-menu">
    <!-- Right Nav Section -->
    <ul class="tabs" data-tab>
  <li class="tab-title active"><a href="#panel1">Tab 1</a></li>
  <li class="tab-title"><a href="#panel2">Tab 2</a></li>
  <li class="tab-title"><a href="#panel3">Tab 3</a></li>
  <li class="tab-title"><a href="#panel4">Tab 4</a></li>
</ul>
</div>

<div class="tabs-content">
  <div class="content active" id="panel1">
    <p>This is the first panel of the basic tab example. You can place all sorts of content here including a grid.</p>
  </div>
  <div class="content" id="panel2">
    <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
  </div>
  <div class="content" id="panel3">
    <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
  </div>
  <div class="content" id="panel4">
    <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
  </div>
</div>
  </div>


      
      <?php 
                    echo $this->Session->flash('success');
                    echo $this->Session->flash('error');
                    echo $this->Session->flash('auth', array('params'=>array('class'=>'alert-box alert radius')));
                ?>
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
    //echo $this->Html->script('foundation/foundation');
    echo $this->Html->script('foundation/foundation.topbar');
    echo $this->fetch('script');
  ?>
  <script type="text/javascript">
      $(document).foundation();
  </script>
</body>
</html>