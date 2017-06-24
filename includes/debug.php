<?php
session_start();
if(isset($_GET['role'])){
    $_SESSION['userUAC'] = $_GET['role'];
    header('location: /');
}