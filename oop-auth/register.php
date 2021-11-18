<?php
require_once 'core/user.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $register = $user->register($name, $email, $password);

    if($register){
        echo "User Account Created";
    }else{
        echo "Account was unable to be created, try again";
    }

}
?>
<html>
    <head>
        <title>Welcome to our website</title>
        <link href="assets/style.css" rel="stylesheet">
    </head>
    <?php require_once 'includes/nav.php' ?>
    <body>
        <h1>Create an account</h1>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="input" name="name" required placeholder="Enter your name" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="input" name="email" required placeholder="Enter your email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"  class="input"name="password" required placeholder="Enter your password" />
            </div>
            <button type="submit" name="register">Create Account</button>
        </form>
    </body>
</html>