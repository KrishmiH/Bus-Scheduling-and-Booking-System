<?php
session_start();
include "connection.php";

if(isset($_POST['email'])&&isset($_POST['Password'])){ 
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

$email=validate($_POST['email']);
$password=validate($_POST['Password']);
        if(empty($email)){
    header("Location:index.php?error=email requires");
    exit();}
        else if(empty($password)){
    header("Location:index.php?error=Password requires");
    exit();}
        else{
    $sql="SELECT *FROM logindata WHERE email='$email' AND password_ ='$password'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
       // echo "<h1 style=text-align:center;color:green;font-weight:900>WELCOME $email</h1>";
       if($row['email']===$email && $row['password_']=$password){
        $_SESSION['email']===$row['email'];
        $_SESSION['name']===$row['name'];
        $_SESSION['Id']===$row['Id'];
        header("Location:Dashbroad/Dashbroad.php?");
        exit();
       }
    }else{
        header("Location:index.php?error=Incorrect Username or password");
        exit();
    }
}}
else{
  header("Location:index.php");
  exit();
}
?>