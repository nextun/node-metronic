<?php
switch($_SESSION['userUAC']){
    case 'admin': require "main_content/_admin_main_content.php"; break;
    case 'owner': require "main_content/_owner_main_content.php"; break;
    case 'staff': require "main_content/_staff_main_content.php"; break;
    case 'manager': require "main_content/_manager_main_content.php"; break;
    case 'client': require "main_content/_client_main_content.php"; break;
    default: require "main_content/_admin_main_content.php"; break;
}
