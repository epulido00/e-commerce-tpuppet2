<?php

require_once 'includes/dbh.inc.php';

    if(isset($_GET['Del'])){
        $prodID=$_GET['Del'];
        $sql= "DELETE from productos where prodID= '".$prodID."' ";
        $result=mysqli_query($conn,$sql);

        if($result){
            header("location: adminpage.php?error=none");
        }else{
            echo "Error";
        }
    }else{
        header("location: adminpage.php?error=none");
    }

?>