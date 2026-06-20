<?php
session_start();
    include_once("admin/config/db.php");
    include_once("site-models/products.class.php");
?>
<?php include 'views/layout/head.php'; ?>
<?php include 'views/layout/preload.php'; ?>
<?php include 'views/layout/navbar.php'; ?>

<?php include('route.php'); ?>

<?php include 'views/layout/footer.php'; ?>
<?php include 'views/layout/foot.php'; ?>