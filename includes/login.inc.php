<?php
if(isset($_POST["submit"])){

$user = $_POST["user"];
$pwd = $_POST["pwd"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyInputLogin($user,$pwd) !== false){
    header("location: ../login.php?error=emptyinput");
    exit();
}

loginUser($conn, $user, $pwd );
}

else {

header("location: ../login.php");
exit();

}

