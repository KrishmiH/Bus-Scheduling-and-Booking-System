<?php
    include "connection.php";
    $email=$_POST['email'];
    $password=$_POST['password'];
    include "connection.php";
    $sql="UPDATE logindata set password_='$password'  where email='$email'";
    $result=mysqli_query($connection,$sql);
    if($result){
        echo"updated succussfully";
       header("Location:Resetpwd.php?msg=succussfully updated");

    }else{
        header("Location:Resetpwd.php?msg=something wrong??");

    }
?>