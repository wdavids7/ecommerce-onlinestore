<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./components/header.php";
include "./components/navbar.php";
?>


<h1>Homepage</h1>



<?php
include "./components/footer.php";
?>