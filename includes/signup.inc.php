<?php

if(isset($_POST["submit"])){
    
$name=$_POST["name"];
$email=$_POST["email"];
$user=$_POST["user"];
$pwd=$_POST["pwd"];
$confirmpwd=$_POST["confirmpwd"];

require_once'dbh.inc.php';
require_once'functions.inc.php';

if(emptyInputSignup($name,$email,$user,$pwd,$confirmpwd) !== false){
    header("location: ../signup.php?error=emptyinput");
    exit();
}

if(invalidUser($user) !== false){
    header("location: ../signup.php?error=invalidUser");
    exit();
}

if(invalidEmail($email) !== false){
    header("location: ../signup.php?error=invalidEmail");
    exit();
}

if(pwdMatch($pwd,$confirmpwd) !== false){
    header("location: ../signup.php?error=passwordsdontmatch");
    exit();
}

if(userExists($conn,$user,$email) !== false){
    header("location: ../signup.php?error=usernamealreadyexists");
    exit();
}

createUser($conn, $name,$email,$user,$pwd);
}

?>