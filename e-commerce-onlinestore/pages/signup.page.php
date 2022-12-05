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
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="../assets/stripe-logo.svg" alt="" width="70" height="50"></a>
        </div>
    </nav>

    <div class="text-center mt-5">
        <h2 class="pb-3">Signup</h2>


        <form action="../include/process-signup.inc.php" method="post" id="signup" novalidate>
            <div class="d-grid gap-1 col-2 mx-auto">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" type="text" id="name" name="name">
            </div>

            <div class="d-grid gap-1 col-2 mx-auto pt-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" type="email" id="email" name="email">
            </div>

            <div class="d-grid gap-1 col-2 mx-auto pt-3">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" type="password" id="password" name="password">
            </div>

            <div class="d-grid gap-1 col-2 mx-auto pt-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
            </div>

            <div class="d-grid gap-1 col-2 mx-auto pt-4">
            <button class="btn btn-dark">Sign Up</button>
            </div>
        </form>
    </div>
</body>

</html>