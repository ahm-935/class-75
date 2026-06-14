<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];

    if($page == 'dashboard'){
        include_once('views/pages/dashboard.php');
    }else if($page == 'branches'){
       include_once('views/pages/branches.php');
    }else if($page == 'parcels'){
       include_once('views/pages/parcels.php');
    }else if($page == 'riders'){
       include_once('views/pages/riders.php');
   }else if($page == 'shipments'){
       include_once('views/pages/shipments.php');
    }else{
        include_once('views/pages/dashboard.php');    
    }
}