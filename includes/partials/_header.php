<?php
switch($_SESSION['userUAC']){
    case 'admin': require "header/_admin_header.php"; break;
    case 'owner': require "header/_owner_header.php"; break;
    case 'staff': require "header/_staff_header.php"; break;
    case 'manager': require "header/_manager_header.php"; break;
    case 'client': require "header/_client_header.php"; break;
    default: require "header/_admin_header.php"; break;
}
