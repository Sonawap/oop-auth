<?php
require_once 'core/user.php';
$user->logout();
header("Location: bye.php?message=logged out");
?>