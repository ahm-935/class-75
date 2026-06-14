<?php
    include_once 'config/base.php';
    include_once 'config/db.php';

?>     
<?php include_once 'views/layouts/head.php'; ?>
<!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php include_once 'views/layouts/nav.php'; ?>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <?php include_once 'views/layouts/aside.php'; ?>
      <!--end::Sidebar-->
      <!--begin::App Main-->
     <?php include 'route.php'; ?>
      <!--end::App Main-->
     <?php include_once 'views/layouts/footer.php'; ?>
    </div>
    <!--end::App Wrapper-->
    <?php include_once 'views/layouts/foot.php'; ?>