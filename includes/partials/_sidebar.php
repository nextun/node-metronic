<?php
switch($_SESSION['userUAC']){
    case 'admin': require "sidebar/_admin_sidebar.php"; break;
    case 'owner': require "sidebar/_owner_sidebar.php"; break;
    case 'staff': require "sidebar/_staff_sidebar.php"; break;
    case 'manager': require "sidebar/_manager_sidebar.php"; break;
    case 'client': require "sidebar/_client_sidebar.php"; break;
    default: require "sidebar/_admin_sidebar.php"; break;
}
