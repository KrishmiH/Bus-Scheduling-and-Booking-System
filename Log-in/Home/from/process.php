<?php

include("config.php");

//extract($_POST);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

//echo"$firstname,$lastname,$phone,$email,$message";
 $query="INSERT INTO contactdata(firstname,lastname,phone,email,message) VALUES('$firstname','$lastname','$phone','$email','$message')";
//$query = "INSERT INTO contact-data '('firstname','lastname','phone','email','message') VALUES ('".$firstname."','".$lastname."','".$phone."','".$email."','".$message."')";
//echo"$query";
$result=mysqli_query($conn,$query);
if(!$result)
{
    echo"Something went wrong";
}
else{
echo "Thanks for submiting your query";
}
$conn->close();


?>