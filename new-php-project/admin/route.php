<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if ($page == 'dashboard') {
        include_once('views/pages/dashboard.php');
    }
     elseif ($page == 'users') {
        include_once('views/pages/users/manage.php');
    }
    elseif ($page == 'create-user') {
       include_once('views/pages/users/create.php');
   }
    elseif ($page == 'edit-user') {
       include_once('views/pages/users/edit.php');
   }
     elseif ($page == 'form' || $page == 'form.php') {
        include_once('views/pages/form.php');
    }
     elseif ($page == 'parcels' || $page == 'parcels.php') {
        include_once('views/pages/parcels/manage.php');
    }
     elseif ($page == 'add-parcel') {
        include_once('views/pages/parcels/add-parcel.php');
    }
     elseif ($page == 'riders' || $page == 'rider.php') {
        include_once('views/pages/riders/manage.php');
    }
     elseif ($page == 'add-rider') {
        include_once('views/pages/riders/add-rider.php');
    }
     elseif ($page == 'branches' || $page == 'branches.php') {
        include_once('views/pages/branches/manage.php');
    }
     elseif ($page == 'add-branch') {
        include_once('views/pages/branches/add-branch.php');
    }
     elseif ($page == 'shipments' || $page == 'shipments.php') {
        include_once('views/pages/shipments.php');
    }
     else {
        include_once('views/pages/dashboard.php');
    }
}

?>