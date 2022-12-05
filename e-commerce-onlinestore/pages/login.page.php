<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/../db/database.php";

    $sql = sprintf(
        "SELECT * FROM user 
                    WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"])
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

        if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: ../index.php");
            exit;
        }
    }

    $is_invalid = true;
}
?>

<?php if ($is_invalid) : ?>
    <em>Invalid login</em>
<?php endif; ?>

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
        <h2 class="pb-3">Login</h2>

        <form method="post">
            <div class="d-grid gap-1 col-2 mx-auto">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            </div>
            <div class="d-grid gap-1 col-2 mx-auto pt-3">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="d-grid gap-1 col-2 mx-auto pt-4">
                <button class="btn btn-dark">Login</button>
            </div>
        </form>

        <div class="mt-2">
            <h6 class="text-light fw-normal">Don't have an account yet? <a class="text-light" href="../pages/signup.page.php">Sign up here!</a></h6>
        </div>
    </div>
</body>

</html>