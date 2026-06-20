<?php
    require_once 'config/base.php';

?>     

<?php include_once'views/layouts/head-ind.php';?>
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->



      <?php //echo "<h1>".$_GET['page']."</h1>" ; ?>
     
     
     
     
      <?php include_once'views/layouts/nav.php'; ?>
      <!--end::Header-->
      <!--begin::Sidebar-->
     <?php include_once'views/layouts/aside.php'; ?>
     
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <!-- <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Dashboard</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div> -->
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <?php include "route.php"; ?>
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2026&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <?php include_once'views/layouts/foot.php'; ?>