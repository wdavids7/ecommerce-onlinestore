<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../components/header.php";
include "../components/navbar.php";
?>

<!-- Sign up form section starts -->
<div>
  <h4>Sign Up</h4>
  <form action="../includes/signup.inc.php" method="POST">
    <input type="text" name="uid" placeholder="Username" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <input type="password" name="pwdRepeat" placeholder="Repeat Password" required>
    <input type="text" name="email" placeholder="E-mail" required>
    <button type="submit" name="submit">Sign Up</button>
  </form>
</div>
<!-- Sign up form section ends -->

<?php
include "../components/footer.php";
?>