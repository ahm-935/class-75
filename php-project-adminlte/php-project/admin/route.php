<?php 
if (isset($_GET['page'])) {
    $page = $_GET['page'];


    if($page == 'dashboard' ){
        include_once 'views/pages/dashboard.php';
    }else if($page == 'form' || $page == 'form.php'){
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
    else{
        include_once('views/pages/dashboard.php');
    } 

}
?>