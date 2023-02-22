<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../components/header.php";
include "../components/navbar.php";
?>

<!-- Login form section starts -->
<div>
  <h4>Login</h4>
  <form action="../includes/login.inc.php" method="POST">
    <input type="text" name="uid" placeholder="Username" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <button type="submit" name="submit">Login</button>
  </form>
</div>
<!-- Login form section ends -->

<?php
include "../components/footer.php";
?>