<?php 
if (isset($_GET['page'])) {
    $page = $_GET['page'];


    if(isset($_SESSION['id']) == false ){
        include_once 'views/pages/auth/login.php';
    }
    else if($page == 'dashboard' ){
        include_once 'views/pages/dashboard.php';
    }
    else if($page == 'form' || $page == 'form.php'){
        include_once 'views/pages/form.php';
    }
    else if($page == 'table' || $page == 'table.php'){
        include_once 'views/pages/table.php';
    }
    else if($page == 'users'){
        include_once 'views/pages/users/manage.php';
    }
    else if($page == 'create-user'){
        include_once 'views/pages/users/create.php';
    }else if($page == 'edit'){
        include_once 'views/pages/users/edit.php';
    }
    else if($page == 'products'){
        include_once 'views/pages/products/manage.php';
    }
    else if($page == 'create-product'){
        include_once 'views/pages/products/create.php';
    }
    else if($page == 'pos'){
        include_once 'views/pages/pos.php';
    }
    else if($page == 'login'){
        include_once 'views/pages/auth/login.php';
    }
    else{
        include_once('views/pages/dashboard.php');
    } 

}
?>