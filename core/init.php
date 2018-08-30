<?php
session_start();
require_once "config/connection.php";
require_once "function/Database.php";
require_once "function/Crud.php";
require_once "function/Login.php";
require_once "function/Time.php";
require_once "function/notif.php";
$conn = new Database($host, $user, $pass, $database);
$login = new Login($conn);
$crud = new Crud($conn);
 ?>