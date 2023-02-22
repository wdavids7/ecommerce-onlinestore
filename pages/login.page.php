<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../components/header.php";
include "../components/navbar.php";
?>

<!-- Login form content starts -->
<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card">
          
          <div class="card-header">
            <h4>Login</h4>
          </div>

          <!-- Login form starts -->
          <form action="../includes/login.inc.php" method="POST">
            <div class="card-body">
              <div class="form-group mb-3">
                <!-- Username label -->
                <label>Username</label>
                <input type="text" name="uid" placeholder="Enter Username" class="form-control" required>
              </div>

              <!-- Password label -->
              <div class="form-group mb-3">
                <label>Password</label>
                <input type="password" name="pwd" placeholder="Enter Password" class="form-control" required>
              </div>

              <!-- Login submit button -->
              <div class="form-group mb-3">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
              </div>
          </form>
          <!-- Login form ends -->

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Login form content ends -->

<?php
include "../components/footer.php";
?>