<?php
    require_once 'config/base.php';

?>     

<?php include_once('views/layouts/head.php');
?>
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
     <?php include_once 'views/layouts/nav.php'; ?>
      <!--end::Header-->
      
      <!--begin::Sidebar-->
    <?php include_once 'views/layouts/aside.php'; ?>
      <?php include ('route.php'); ?>
    <?php include_once 'views/layouts/footer.php'; ?>

    <?php include_once 'views/layouts/foot.php'; ?>