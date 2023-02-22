<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./components/header.php";
include "./components/navbar.php";
?>


<main>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Homepage</h3>
                </div>
            </div>
        </div>
    </div>
</main>



<?php
include "./components/footer.php";
?>