<?php
    require_once 'config/base.php';
    
    ?>
<?php include_once 'views/layouts/header.php'; ?>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
    <?php include_once 'views/layouts/nav.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once 'views/layouts/sidebar.php'; ?>
        <!-- partial main-panel -->
         <div class="main-panel">
            <?php include_once 'route.php'; ?>
          </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   <?php include_once 'views/layouts/foot.php'; ?>