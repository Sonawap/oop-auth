<?php
require_once 'core/user.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = $user->login($email, $password);
}

?>
<html>
    <head>
        <title>Welcome to our website</title>
        <link href="assets/style.css" rel="stylesheet">
    </head>
    <?php require_once 'includes/nav.php' ?>
    <body>
        <h1>Login to your account</h1>
        <?php
            if(isset($_GET['error'])){
                echo $_GET['error'];
            }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="input" name="email" required placeholder="Enter your email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"  class="input"name="password" required placeholder="Enter your password" />
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </body>
</html>