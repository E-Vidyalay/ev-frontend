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
   <script type="text/javascript">var baseUrl = '<?php echo $this->base; ?>';</script>
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
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
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-home fa-fw')) . " પ્રવેશદ્વાર",array('controller'=>'pages','action'=>'home'),array('escape' => false)); ?></li>
        <li class='has-sub-menu'><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-play-circle-o fa-fw')) . " વિડીયો લાઇબ્રેરી",array('controller'=>'Links','action'=>'index'),array('escape' => false)); ?></li>
        <li class='has-sub-menu'><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-smile-o fa-fw')) . " હોબીલોબી",array('controller'=>'HobbylobbyPosts','action'=>'index'),array('escape' => false)); ?></li>
        <li class="has-submenu"><a href="#"><i class="fa fa-file fa-fw"></i>ન્જીઓ</a>
            <ul class="left-submenu">
            <li class="back"><a href="#">Back</a></li>
               <li><?php echo $this->Html->link('નવુ',array('controller'=>'ngos','action'=>'register')); ?></li>
                  <li><?php echo $this->Html->link('ન્જીઓ',array('controller'=>'ngos','action'=>'index')); ?></li>
            </ul></li>
            <li class="has-submenu"><a href="#"><i class="fa fa-arrow-right fa-fw"></i>સાહિત્ય</a>
            <ul class="left-submenu">
            <li class="back"><a href="#">Back</a></li>
              <li><?php echo $this->Html->link('ઈ-બૂક',array('controller'=>'Literatures','action'=>'index')); ?></li>
              <li><?php echo $this->Html->link('લેખ',array('controller'=>'LiteraturePosts','action'=>'index')); ?></li>
            </ul></li>
        <!-- <li class="has-submenu"><a href="#"><i class="fa fa-book fa-fw"></i>વિષય</a>
            <ul class="left-submenu">
            <li class="back"><a href="#">Back</a></li> -->
            <?php
              // foreach ($subjects as $sub) {
              //   echo '<li class="has-submenu"><a href="#">'.$sub['Subject']['name'].' </a>';
              //   echo '<ul class="left-submenu">
              //         <li class="back"><a href="#">Back</a></li>';
              //     foreach ($levels as $lev) {
              //       echo '<li><label>'.$lev['Level']['level_name'].'</label>';
              //       foreach ($topics as $top) {
              //         if($lev['Level']['id']==$top['Topic']['level_id'] && $sub['Subject']['id']==$top['Topic']['subject_id']){
              //           echo '
              //                     <li>'.$this->Html->link($top['Topic']['name'],array('controller'=>'links','action'=>'view_gallery',$top['Topic']['id']),array('escape' => false)).'</a></li>
              //                 ';
              //         }
              //         else
              //         {
              //           echo '<ul class="left-submenu">
              //                 </ul>';
              //         }
              //     }
              //     echo '</li>';
              //     }
                  
                  
              //   echo '</ul>';
              //   echo '</li>';  
              // }
            ?>
              <!-- <li><?php echo $this->Html->link('વિડીયો લાઇબ્રેરી',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('ગણિત',array('controller'=>'pages','action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('ગુજરાતી',array('controller'=>'pages','action'=>'index')); ?></li> -->

            <!-- </ul></li> -->
        <li><label>Users's action</label></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-lock fa-fw')) . "Login",array('controller'=>'users','action'=>'login'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil fa-fw')) . "Register",array('controller'=>'users','action'=>'register'),array('escape' => false)); ?></li>
        <li>
        <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-newspaper-o fa-fw')) . " News letter",array('controller'=>'NewsLetters','action'=>'index'),array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " Vision",array('controller'=>'pages','action'=>'vision'),array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bookmark-o fa-fw')) . " About EVidyalay",array('controller'=>'pages','action'=>'about_us'),array('escape' => false)); ?></li>
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
          <!--<li class="cs-dropdown"><a><i class="fa fa-book fa-fw"></i>વિષય</a>
            <div class="course-menu">
            <ul>-->
              <?php
              // foreach ($subjects as $sub) {
              //   echo '<li><a href="#" data-target="'.$sub['Subject']['id'].'">'.$sub['Subject']['name'].' </a>';
              //   echo '<ul class="subject-menu" id="'.$sub['Subject']['id'].'">
              //     <h4>'.$sub['Subject']['name'].'</h4>
              //     <hr/>';
              //     foreach ($levels as $lev) {
              //       echo '<li><a href="#"> <b>'.$lev['Level']['level_name'].'</b> </a>';
              //       foreach ($topics as $top) {
              //         if($lev['Level']['id']==$top['Topic']['level_id'] && $sub['Subject']['id']==$top['Topic']['subject_id']){
              //           echo '<ul class="topic-menu">
              //                     <li>'.$this->Html->link($top['Topic']['name'],array('controller'=>'links','action'=>'view_gallery',$top['Topic']['id']),array('escape' => false)).'</a></li>
              //                 </ul>
              //                 ';
              //         }
              //         else
              //         {
              //           echo '<ul class="topic-menu">
              //                 </ul>';
              //         }
              //     }
              //     echo '</li>';
              //     }
                  
                  
              //   echo '</ul>';
              //   echo '</li>';  
              // }
            ?>
            <!--</ul>
            </div></li>-->
          <li class='has-sub-menu'><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-play-circle-o fa-fw')) . " વિડીયો લાઇબ્રેરી",array('controller'=>'Links','action'=>'index'),array('escape' => false)); ?></li>
          <li class='has-sub-menu'><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-smile-o fa-fw')) . " હોબીલોબી",array('controller'=>'HobbylobbyPosts','action'=>'index'),array('escape' => false)); ?></li>
           <li class='has-sub-menu'><a><i class="fa fa-file fa-fw"></i>ન્જીઓ</a>
                  <ul class='sub-menu-2'>
                  <li><?php echo $this->Html->link('નવુ',array('controller'=>'ngos','action'=>'register')); ?></li>
                  <li><?php echo $this->Html->link('ન્જીઓ',array('controller'=>'ngos','action'=>'index')); ?></li>
                  </ul></li>
            <li class='has-sub-menu'><a><i class="fa fa-arrow-right fa-fw"></i>સાહિત્ય</a>
                  <ul class='sub-menu-2'>
                  <li><?php echo $this->Html->link('ઈ-બૂક',array('controller'=>'Literatures','action'=>'index')); ?></li>
                  <li><?php echo $this->Html->link('લેખ',array('controller'=>'LiteraturePosts','action'=>'index')); ?></li>
                  </ul></li>
            <li class='has-sub-menu'><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-info fa-fw')) . " માહિતિ મિત્ર",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false)); ?></li>
            
        </ul>
      </section>
    </div>
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