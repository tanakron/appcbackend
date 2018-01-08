<?php
include 'header.php';


include "footer.php";
//include 'body_tabledata.php';

?>







<body class="page-loading">
  <!-- page loading spinner -->
 
  <!-- /page loading spinner -->
  <div class="app layout-fixed-header">
    <!-- sidebar panel -->
    <div class="sidebar-panel offscreen-left">
      
     
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
         <?php include "nav_index.php";;?>
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
       







































