<?php

function emptyInputSignup($name,$email,$user,$pwd,$confirmpwd){
$result=true;
if(empty($name) || empty($email) || empty($user) || empty($pwd) || empty($confirmpwd)){
    $result=true;
}else{
    $result=false;
}
return $result;
}

function invalidUser($user){
   $result=true;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $user)){
       $result=true;
    }else {
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result=true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else {
        $result=false;
    }
    return $result;
}


function pwdMatch($pwd,$confirmpwd){
    $result=true;
    if($pwd !== $confirmpwd){
        $result=true;
    }else {
        $result=false;
    }
    return $result;
}


function userExists($conn,$user,$email){
  $sql= "SELECT * FROM users WHERE usersUid=? OR usersEmail=?;";
  $stmt= mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt,"ss",$user,$email);
  mysqli_stmt_execute($stmt);

  $resultData= mysqli_stmt_get_result($stmt);

  if($row= mysqli_fetch_assoc($resultData)){
    return $row;
  }else{
      $result=false;
      return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $name,$email,$user,$pwd){
    $sql= "INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES (?,?,?,?);";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location: ../signup.php?error=stmtfailed");
      exit();
    }
    
    $hashedPwd= password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$user,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
  }

  function emptyInputLogin($user,$pwd){
    $result=true;
    if( empty($user) || empty($pwd)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
    }

  function  loginUser($conn, $user, $pwd ){
      $userExist = userExists($conn,$user,$user);

      if($userExist=== false){
        header("location: ../login.php?error=wronglogin");
        exit(); 
      }

      $pwdHashed = $userExist["usersPwd"];
      $checkPwd = password_verify($pwd, $pwdHashed);

      if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit(); 
      }
      else if($checkPwd === true){
          session_start();
        $_SESSIOM["userid"] = $userExist["usersID"];
        $_SESSION["useruid"] = $userExist["usersUid"];
        header("location: ../home.php");
        exit(); 

      }

     
  }

  function getLista($conn){
    $sql="SELECT * FROM productos";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
      return $result;
    }
  }

 