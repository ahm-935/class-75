<?php
    include_once 'config/base.php';
    
    ?>
<?php 
include_once 'views/layouts/header.php';
?>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php
        include 'views/layouts/nav.php';
        ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include 'views/layouts/sidebar.php';
        ?>
        <!-- main partial -->
        <?php
        include 'route.php';
        ?>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
     <?php
        include_once 'views/layouts/foot.php';
        ?>