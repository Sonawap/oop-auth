<?php
session_start();
error_reporting(0);
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
        $query = "SELECT * FROM 
                users 
                where 
                email = '$email' 
                and 
                password = '$newPassword' ";
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

    public static function getUserDetails(){
        require 'db.php';
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM 
                users 
                where 
                id = '$user_id'"
            ;
        $result = $sonawap->query($query) or die($sonawap->error.__LINE__);
        return $rows = mysqli_fetch_array($result);
    }

    public static function logout(){
        session_destroy();
    }
}

$user = new User();