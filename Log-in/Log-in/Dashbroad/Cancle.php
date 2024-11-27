<?php

include "Connection.php";
$sql="DELETE FROM myschedule";
$result=mysqli_query($connection,$sql);
 if($result){
    echo"data record succussfully";
 }else{
    echo"error".mysqli_error($connection);
 }

?>