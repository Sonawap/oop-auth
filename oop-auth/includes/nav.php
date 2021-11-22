<header>
    <nav>
        <ul>
            <li><a href="index.php">Home Page</a></li>
            <?php if(!$user->getUserDetails()) : ?>
                <li><a href="register.php">Register </a></li>
                <li><a href="login.php">Login </a></li>
            <?php else : ?>
                <li><a href="profile.php">Profile </a></li>
                <li><a href="logout.php">Logout </a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>