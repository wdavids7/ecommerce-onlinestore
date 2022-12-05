<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/a99a1dce0d.js" crossorigin="anonymous"></script>
    <!-- Just validate script -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <!-- JS validate script -->
    <script src="../js/validation.js" defer></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/shop.css">

    <title>OnlineStore App</title>
</head>

<body>

    <!-- Header section start -->
    <section id="header">
        <!-- Navbar logo -->
        <a href="../index.php"><img class="logo" src="../assets/stripe-logo.svg" alt="logo"></a>
        <div>
            <!-- Navbar -->
            <ul id="navbar">
                <li><a class="active" href="../pages/shop.page.php">Catalogue</a></li>
                <li><a href="../pages/aboutus.page.php">About us</a></li>
                <li><a href="../pages/contactus.page.php">Contact us</a></li>
                <li><a href="../component/logout.php">Logout</a></li>
                <!-- <li><a href="../pages/catalogue.page.php">Catalogue</a></li> -->
                <!-- <li id="lg-bag"><a href="../pages/cart.page.php"><i class="fa-solid fa-bag-shopping"></i></a></li> -->
                <!-- <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a> -->
            </ul>
        </div>
        <!-- Navbar mobile icons -->
        <!-- <div id="mobile">
            <a href="../pages/cart.page.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-bars"></i>
        </div> -->
    </section>
    <!-- Header section end -->


    