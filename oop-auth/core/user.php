<?php
session_start();
class User{
    public static function register($name, $email, $password){
        require 'db.php';
        $newPassword = md5($password);
        $query ="INSERT INTO 
                users 
                (name,email,password) 
                values 
                ('$name','$email','$newPassword')";

        $register = $sonawap->query($query);

        if($register){
            return true;
        }else{
            return false;
        }
    }

    public static function login($email, $password){
        require 'db.php';
        $newPassword = md5($password);
        $query = "SELECT * FROM users where email = '$email' and password = '$newPassword' ";
        $login = $sonawap->query($query);
        $count = $login->num_rows;

        if($count > 0){
            if($row = mysqli_fetch_array($login)){
                $_SESSION['user_id'] = $row['id'];
                header("Location: dashboard.php?message=success");
            }
        }else{
            header("Location: login.php?error=Cannot login");
        }

    }
}

$user = new User();