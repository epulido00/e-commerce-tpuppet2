<?php

function emptyInputSignup($name,$email,$user,$pwd,$confirmpwd){
    $result;
    if(empty($name) || empty($email) || empty($user) || empty($pwd) || empty($confirmpwd)){
        $result=true;
    } else{
        $result=false;
    }
    return $result;
}


function invalidUser($user){
   $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/"), $user){
        $result=true;
    }else {
        $result=false;
    }
    return $result;
}

function invalidEmail($email){

}

function pwdMatch($pwd,$confirmpwd){

}

function userExists($conn,$user){

}

?>