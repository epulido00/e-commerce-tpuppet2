<?php

if (isset($_POST['guardar'])){
  
    $pic="img/".basename($_FILES['img']['name']);


    $nombreprod= $_POST['nombreprod'];
    $desc= $_POST['descr'];
    $precio= $_POST['precio'];
    $oferta= $_POST['oferta'];
    $img= $_FILES['img']['name'];

    require_once 'dbh.inc.php';

    
    $sql="INSERT INTO productos (nombre,descripcion,precio,oferta,img) VALUES ('$nombreprod','$desc','$precio','$oferta','$img')";
    mysqli_query($conn,$sql);

    if(move_uploaded_file($_FILES['img']['tmp_name'],$pic)){
        $msg="Imagen subida";
    }else{
        $msg="Error con la imagen";
    }
  
  
}

