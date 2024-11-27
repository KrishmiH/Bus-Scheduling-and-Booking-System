<?php
include "../Log-in/connection.php";
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['mail'];
$password=$_POST['pword'];
$conpassword=$_POST['cpword'];
if($password==$conpassword){
$query="INSERT INTO logindata(email,password_,name_first,name_last) Values('$email','$password','$firstname','$lastname')";
$result=mysqli_query($connection,$query);
    if($result){
        header("Location:Signup.php?msg=succussfully sign up");
    }else{
        header("Location:Signup.php?msg=database error!!!");
    }
}else{
    header("Location:Signup.php?msg=password missmatch!!");
}

?>