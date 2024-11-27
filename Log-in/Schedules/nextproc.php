<?php
include "../Log-in/connection.php";
$name=$_POST['name'];
$PhoneNo=$_POST['phone'];
$seat=$_POST['seats'];
$payment=$_POST['payment'];
$type=$_POST['Type'];
$Busname1='Wijesuriya Express';
$date1='2023-06-15';
$ATime1='10:00:00';
$Dtime1='12:00:00';
$RegNo='WP4538';
$sql="INSERT INTO myschedule(Name,phone,seatNo,Busname,date,Atime,Dtime,type,payment,regno) VALUES('$name','$PhoneNo','$seat','$Busname1','$date1','$ATime1','$Dtime1','$type','$payment','$RegNo')";
$result=mysqli_query($connection,$sql);
if($result){
    echo"Record added";
}else{
    echo"something is wrong". mysqli_error($connection);
}

?>