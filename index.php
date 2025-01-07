<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'Order') {
    $page = "Order.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'Customer') {
    $page = "Customer.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'User') {
    if ($_SESSION['level_decafe']== 1){
        $page = "User.php";
        include "main.php";
    }else{
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'Report') {
    if ($_SESSION['level_decafe']== 1){
        $page = "Report.php";
        include "main.php";
    }else{
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'Menu') {
    $page = "Menu.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";
} else {
    $page = "home.php";
    include "main.php";
}
