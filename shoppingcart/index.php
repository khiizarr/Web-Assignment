<?php
session_start();
//
include 'functions.php';
$pdo = pdo_connect_mysql();
// Page is set to home (home.php) by default
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
//
include $page . '.php';
