<?php
switch($_SESSION['userUAC']){
    case 'admin': require "quick_sidebar/_admin_quick_sidebar.php"; break;
    case 'owner': require "quick_sidebar/_owner_quick_sidebar.php"; break;
    case 'staff': require "quick_sidebar/_staff_quick_sidebar.php"; break;
    case 'manager': require "quick_sidebar/_manager_quick_sidebar.php"; break;
    case 'client': require "quick_sidebar/_client_quick_sidebar.php"; break;
    default: require "quick_sidebar/_admin_quick_sidebar.php"; break;
}
