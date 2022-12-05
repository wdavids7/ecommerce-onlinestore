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

    <title>Shop</title>
</head>

<body>

    <!-- Header section start -->
    <section id="header">
        <!-- Navbar logo -->
        <a href="../index.php"><img class="logo" src="../assets/stripe-logo.svg" alt="logo"></a>
        <div>
            <!-- Navbar -->
            <ul id="navbar">
                <li><a class="active" href="#">Catalogue</a></li>
                <li><a href="../pages/aboutus.page.php">About us</a></li>
                <li><a href="../pages/contactus.page.php">Contact us</a></li>
                <li><a href="../component/logout.php">Logout</a></li>

                <!-- Cart-Icon -->
                <i class="fa-solid fa-bag-shopping" id="cart-icon"></i>
                <!-- Cart -->
                <div class="cart">
                    <h2 class="cart-title">Your Cart</h2>
                    <!-- Content -->
                    <div class="cart-content">

                    </div>
                    <!-- Total -->
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price">R0</div>
                    </div>
                    <!-- Buy Button -->
                    <button type="button" class="btn-buy">Buy Now</button>
                    <!-- Cart Close -->
                    <i class="fa-solid fa-xmark" id="close-cart"></i>
                </div>

            </ul>
        </div>
    </section>
    <!-- Header section end -->

    <!-- Hero section start -->
    <section id="page-header">
        <h2>#gooutside</h2>
        <p>#featuredproducts</p>
    </section>
    <!-- Hero section end -->


    <!-- Shop -->
    <section class="shop container">
        <h2 class="section-title">Featured Products</h2>
        <!-- Content -->
        <div class="shop-content">
            <!-- Box 1 -->
            <div class="product-box">
                <img src="../assets/products/sunglasses1.jpg" alt="" class="product-img">
                <h2 class="product-title">Burberry - BE3125</h2>
                <span class="price">R3860.00</span>
                <i class="fa-solid fa-bag-shopping add-cart"></i>
            </div>
            <!-- Box 2 -->
            <div class="product-box">
                <img src="../assets/products/sunglasses2.jpg" alt="" class="product-img">
                <h2 class="product-title">Bvlgari - BV6161</h2>
                <span class="price">R4810.00</span>
                <i class="fa-solid fa-bag-shopping add-cart"></i>
            </div>
            <!-- Box 3 -->
            <div class="product-box">
                <img src="../assets/products/sunglasses3.jpg" alt="" class="product-img">
                <h2 class="product-title">Ray-ban - RB2180</h2>
                <span class="price">R2640.00</span>
                <i class="fa-solid fa-bag-shopping add-cart"></i>
            </div>
            <!-- Box 4 -->
            <div class="product-box">
                <img src="../assets/products/sunglasses4.jpg" alt="" class="product-img">
                <h2 class="product-title">Ray-Ban - RB3016</h2>
                <span class="price">R2300.00</span>
                <i class="fa-solid fa-bag-shopping add-cart"></i>
            </div>
            <!-- Box 5 -->
            <div class="product-box">
                <img src="../assets/products/sunglasses5.jpg" alt="" class="product-img">
                <h2 class="product-title">Ray-Ban - RB3625</h2>
                <span class="price">R3600.00</span>
                <i class="fa-solid fa-bag-shopping add-cart"></i>
            </div>
            <!-- Box 6 -->
            <div class="product-box">
                <img src="../assets/products/sunglasses6.jpg" alt="" class="product-img">
                <h2 class="product-title">Oakley - OO9473</h2>
                <span class="price">R3080.00</span>
                <i class="fa-solid fa-bag-shopping add-cart"></i>
            </div>
            <!-- Box 7 -->
            <div class="product-box">
                <img src="../assets/products/sunglasses7.jpg" alt="" class="product-img">
                <h2 class="product-title">Oakley - OO9474</h2>
                <span class="price">R2380.00</span>
                <i class="fa-solid fa-bag-shopping add-cart"></i>
            </div>
            <!-- Box 8 -->
            <div class="product-box">
                <img src="../assets/products/sunglasses8.jpg" alt="" class="product-img">
                <h2 class="product-title">Bvlgari - BV6160</h2>
                <span class="price">R8010.00</span>
                <i class="fa-solid fa-bag-shopping add-cart"></i>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="../pages/shop.page.php"><i class="fa-solid fa-arrow-left"></i></a>
        <a href="../pages/newarrivals.page.php">1</a>
        <a href="../pages/newarrivals.page.php"><i class="fa-solid fa-arrow-right"></i></a>

    </section>

    <!-- Newsletter section start -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="news-text">
            <h4>Sign Up For Our Newsletter</h4>
            <p>Get E-mail updates about the latest brands and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
    <!-- Newsletter section end -->

    <?php
    include '../component/footer.php'
    ?>