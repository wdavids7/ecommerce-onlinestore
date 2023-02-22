<!-- Navigation bar starts -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fa-brands fa-stripe fa-2xl"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php
        if (isset($_SESSION["userid"])) {
        ?>
          <li class="nav-item"><a class="nav-link" href=""><?php echo $_SESSION["useruid"]; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="./includes/logout.inc.php">Logout</a></li>
        <?php
        } else {
        ?>
          <li class="nav-item"><a class="nav-link" href="../pages/login.page.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="../pages/signup.page.php">Sign Up</a></li>
        <?php
        }
        ?>
          <li class="nav-item"><a class="nav-link" href="#">My Account</a></li>
          <li class="nav-item"><a class="nav-link">|</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-heart"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navigation bar ends -->