<?php
require_once 'dbh.inc.php';

if (isset($_POST['guardar'])){
  
    if(empty($_POST['nombreprod']) || empty($_POST['descr'])  || empty($_POST['precio']) || empty($_FILES['img']['name']) ){
        echo "Complete los espacios en blanco!";
        header("location: ../adminpage.php?error=emptyinput");
        exit();
    }
    else{
    $pic="../img/".$_FILES['img']['name'];


    $nombreprod= $_POST['nombreprod'];
    $desc= $_POST['descr'];
    $precio= $_POST['precio'];
    $oferta= $_POST['oferta'];
    $img= $_FILES['img']['name'];

    
    
  $sql="INSERT INTO productos (nombre,descripcion,precio,oferta,imagen) VALUES ('$nombreprod','$desc','$precio','$oferta','$img')";
   if( !mysqli_query($conn,$sql) ){
       print_r(mysqli_error($conn));
   }

    if(move_uploaded_file($_FILES['img']['tmp_name'],$pic)){
        echo "Imagen subida";
    }else{
        echo "Error con la imagen";
    }
  
    header("location: ../adminpage.php?error=none");
  

}
}

if (isset($_POST['update'])){

    $pic="../img/".$_FILES['img']['name'];

    $prodID= $_GET['ID'];
    $nombre= $_POST['nombreprod'];
    $descripcion= $_POST['descr'];
    $precio= $_POST['precio'];
    $oferta= $_POST['oferta'];
    $img=$_FILES['img']['name'];

    if(move_uploaded_file($_FILES['img']['tmp_name'],$pic)){
        echo "Imagen subida";
    }else{
        echo "Error con la imagen";
    }

    if($img){
        
        $sql=" UPDATE productos SET nombre='".$nombre."',descripcion='".$descripcion."',precio='".$precio."',oferta='".$oferta."',imagen='".$img."' where prodID='".$prodID."'";
   
    }else{
        $sql=" UPDATE productos SET nombre='".$nombre."',descripcion='".$descripcion."',precio='".$precio."',oferta='".$oferta."' where prodID='".$prodID."'";
    }


    if( !mysqli_query($conn,$sql) ){
        print_r(mysqli_error($conn));
    }
    else{
        header("location: ../adminpage.php?error=none");
    }

}else{
    header("location: ../adminpage.php?error=none");
}
