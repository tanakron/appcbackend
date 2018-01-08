
<body class="page-loading">
  <!-- page loading spinner -->
 
  <!-- /page loading spinner -->
  <div class="app layout-fixed-header">
    <!-- sidebar panel -->
    <div class="sidebar-panel offscreen-left">
      <div class="brand">
        <!-- toggle small sidebar menu -->
        <a href="javascript:;" class="toggle-apps hidden-xs" data-toggle="quick-launch">
          <i class="icon-grid"></i>
        </a>
        <!-- /toggle small sidebar menu -->
        <!-- toggle offscreen menu -->
        <div class="toggle-offscreen">
          <a href="javascript:;" class="visible-xs hamburger-icon" data-toggle="offscreen" data-move="ltr">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo">
          <span>Reactor</span>
        </a>
        <a href="#" class="small-menu-visible brand-logo">R</a>
        <!-- /logo -->
      </div>
      <ul class="quick-launch-apps hide">
        <li>
          <a href="apps-gallery.html">
            <span class="app-icon bg-danger text-white">
            G
            </span>
            <span class="app-title">Gallery</span>
          </a>
        </li>
        <li>
          <a href="apps-messages.html">
            <span class="app-icon bg-success text-white">
            M
            </span>
            <span class="app-title">Messages</span>
          </a>
        </li>
        <li>
          <a href="apps-social.html">
            <span class="app-icon bg-primary text-white">
            S
            </span>
            <span class="app-title">Social</span>
          </a>
        </li>
        <li>
          <a href="apps-travel.html">
            <span class="app-icon bg-info text-white">
            T
            </span>
            <span class="app-title">Travel</span>
          </a>
        </li>
      </ul>
      <!-- main navigation -->
      <nav role="navigation">
<?php include 'manu_aside.php';?>
      </nav>
      <!-- /main navigation -->
    </div>
    <!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
      <!-- top header -->
     <?php include 'manu_header.php';?>
      </div>
      <!-- /top header -->
      <!-- main area -->
      <div class="main-content">
           
      </div>
      <!-- /main area -->
    </div>
    <!-- /content panel -->
     <?php   include 'footer_bottom.php'; ?>
    

          <div class="chat-conversation-footer">
            <button class="chat-input-tool">
              <i class="fa fa-camera"></i>
            </button>
            <div class="chat-input" contenteditable=""></div>
            <button class="chat-send">
              <i class="fa fa-paper-plane"></i>
            </button>
          </div>
       