<?php
// echo "Route page";
if(isset($_GET['site']))
{
    $page = $_GET['site'];
    if($page == "home"){
        include_once('views/pages/home.php');
    }else if($page == "blank"){
        include_once('views/pages/blank.php');
    }else if($page == "shop"){
        include_once('views/pages/shop.php');
    }else if($page == "product"){
        include_once('views/pages/product-details.php');
    }else if($page == "login"){
        include_once('views/pages/login.php');
    }else if($page == "register"){
        include_once('views/pages/register.php');
    }
}else{
    include_once('views/pages/home.php');
}
?>