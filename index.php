<?php
$page = "home.php"; // Halaman default

if (isset($_GET['x'])) {
    switch ($_GET['x']) {
        case 'pencatatanriwayatkesehatan':
            $page = "pencatatanriwayatkesehatan.php";
            break;
        case 'jadwalkesehatan':
            $page = "jadwalkesehatan.php";
            break;
        case 'informasikesehatan':
            $page = "informasikesehatan.php";
            break;
        case 'admin':
            $page = "admin.php";
            break;
        case 'login':
            $page = "login.php";
            break;
        default:
            $page = "home.php"; // Halaman default
            break;
    }
}

include "main.php";
?>
