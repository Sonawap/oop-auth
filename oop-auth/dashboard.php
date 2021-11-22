<?php
require_once 'core/user.php';
?>
<html>
    <head>
        <title>Welcome to our website</title>
    </head>
    <?php require_once 'includes/nav.php' ?>
    <body>
        <h1>Welcome to your website</h1>
        <h4>Name : <?php echo $user->getUserDetails()['name'] ?></h4>
        <h4>Email : <?php echo $user->getUserDetails()['email'] ?></h4>
        <h4>ID : <?php echo $user->getUserDetails()['id'] ?></h4>
    </body>
</html>