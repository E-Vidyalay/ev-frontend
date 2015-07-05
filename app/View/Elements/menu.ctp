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
            <li class='has-sub-menu'><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-info fa-fw')) . " માહિતિ મિત્ર",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false)); ?></li>
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