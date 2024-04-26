<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 text-center" style="width: 600px">
        <h1 class="h4">Login</h1>

        <?php if(isset($_GET['success'])): ?>
            <div class="alert alert-info">
                Register successful, please login
            </div>
        <?php endif ?>

        <?php if(isset($_GET['suspended'])): ?>
            <div class="alert alert-danger">
                Account Suspended
            </div>
        <?php endif ?>

        <?php if(isset($_GET['incorrect'])): ?>
            <div class="alert alert-warning">
                Incorrect email or password
            </div>
        <?php endif ?>

    

        <form action="_actions/login.php" method="post">
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button class="btn btn-primary w-100 my-3">Login</button>
            <a href="register.php">Register</a>
        </form>
    </div>
</body>
</html>