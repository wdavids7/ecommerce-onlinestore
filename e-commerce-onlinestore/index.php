<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/./db/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/a99a1dce0d.js" crossorigin="anonymous"></script>
    <!-- Just validate script -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <!-- JS validate script -->
    <script src="./js/validation.js" defer></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="./assets/stripe-logo.svg" alt="" width="70" height="50"></a>
            <?php if (isset($user)) : ?>

                <div class="d-flex">
                    <p><a class="me-2 text-decoration-none fw-semibold text-light bg-dark rounded p-2" href="">Hello <?= htmlspecialchars($user["name"]) ?></a></p>

                    <p><a class="text-decoration-none text-success" href="./pages/shop.page.php">Catalogue</a><span> or </span></p>
                    <p><a class="text-decoration-none text-danger ms-2" href="./component/logout.php">Log out</a></p>

                </div>

            <?php else : ?>

                <p><a class="text-decoration-none text-light bg-dark rounded p-2" href="./pages/login.page.php">Login</a> or <a class="text-decoration-none text-warning bg-dark rounded p-2" target="_blank" href="./pages/signup.page.php">Sign Up</a></p>
            <?php endif; ?>

        </div>
    </nav>

    <!-- Hero section start -->
    <section id="hero">
        <h2>Welcome to Stripe!</h2>
        <h4>Let us help you find the perfect pair.</h4>
    </section>
    <!-- Hero section end -->

</body>
<?php
include './component/footer.php'
?>
</html>