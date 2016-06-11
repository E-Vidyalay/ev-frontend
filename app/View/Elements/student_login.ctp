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
        <li><?php echo $this->Html->link('Dashboard',array('controller'=>'students','action'=>'home'));?></li>
        <li><?php echo $this->Html->link('Apply for quiz',array('controller'=>'students','action'=>'test_application'));?></li>
        <li><?php echo $this->Html->link('Edit Profile',array('controller'=>'students','action'=>'edit_profile')); ?></li>
        <li><?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout')); ?></li>
        <li><label>ઈ-વિદ્યાલય</label></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-home fa-fw')) . " પ્રવેશદ્વાર",array('controller'=>'Pages','action'=>'home'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-hand-o-up fa-fw')) . " ઉદ્દેશ્યો",array('controller'=>'pages','action'=>'objective'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bolt fa-fw')) . " શા માટે ઈ-વિ?",array('controller'=>'pages','action'=>'why_ev'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-child fa-fw')) . " ફાયદા",array('controller'=>'pages','action'=>'benefit'),array('escape' => false)); ?></li>
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
            <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-lightbulb-o fa-fw')) . " યોગદાન",array('controller'=>'Contributors','action'=>'index'),array('escape' => false));?></li>
      </ul>
    </aside>

    <div class="user-nav">
      <section class="user-head hide-for-small hide-for-medium">
        <div class="row">
          <div class="columns large-3">
            <?php echo $this->Html->image('ev-logo2.png',array('class'=>'brand-logo'));?>
            <div class='pro-brand'>ઈ-વિદ્યાલય</div>
          </div>
          <div class="columns large-7">
            <ul class="right" id="pro-menu">
            <li><?php echo $this->Html->link('Dashboard',array('controller'=>'students','action'=>'home'),array('class'=>'np-menu'));?></li>
            <li class='has-sub-menu'><?php echo $this->Html->link('Apply for quiz',array('controller'=>'students','action'=>'test_application'),array('class'=>'np-menu'));?></li>
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
                <li><?php echo $this->Html->link('Edit Profile',array('controller'=>'students','action'=>'edit_profile')); ?></li>
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
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-home fa-fw')) . " પ્રવેશદ્વાર",array('controller'=>'Pages','action'=>'home'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-hand-o-up fa-fw')) . " ઉદ્દેશ્યો",array('controller'=>'pages','action'=>'objective'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bolt fa-fw')) . " શા માટે ઈ-વિ?",array('controller'=>'pages','action'=>'why_ev'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-child fa-fw')) . " ફાયદા",array('controller'=>'pages','action'=>'benefit'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-play-circle-o fa-fw')) . " વિડીયો લાઇબ્રેરી",array('controller'=>'Links','action'=>'index'),array('escape' => false)); ?></li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-smile-o fa-fw')) . " હોબીલોબી",array('controller'=>'HobbylobbyPosts','action'=>'index'),array('escape' => false)); ?></li>
        <li class="has-sub-menu-login"><a><i class="fa fa-file fa-fw"></i>ન્જીઓ</a><ul class='sub-menu-log'>
                  <li><?php echo $this->Html->link('નવુ',array('controller'=>'ngos','action'=>'register')); ?></li>
                  <li><?php echo $this->Html->link('ન્જીઓ',array('controller'=>'ngos','action'=>'index')); ?></li>
                  </ul>
        </li>
        <li class="has-sub-menu-login"><a><i class="fa fa-arrow-right fa-fw"></i>સાહિત્ય</a><ul class='sub-menu-log'>
                  <li><?php echo $this->Html->link('ઈ-બૂક',array('controller'=>'Literatures','action'=>'index')); ?></li>
                  <li><?php echo $this->Html->link('લેખ',array('controller'=>'LiteraturePosts','action'=>'index')); ?></li>
                  </ul>
        </li>
        <li>
            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-info fa-fw')) . " માહિતિ મિત્ર",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false)); ?>
        </li>
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-lightbulb-o fa-fw')) . " યોગદાન",array('controller'=>'Contributors','action'=>'index'),array('escape' => false));?></li>
      </ul>
    </section>
