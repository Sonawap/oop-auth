<?php
$sonawap = new mysqli('localhost', 'root', '', 'oop-auth');
if($sonawap->connect_error){
    printf("Connection Failed: %s\n", $sonawap->connect_error);
    exit();
}