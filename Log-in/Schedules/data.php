<?php
include "../Log-in/connection.php";
$from=$_POST['from'];
$To=$_POST['To'];
$seats=$_POST['seats'];


    if(empty($from)){
    header("Location:Schedlues.php?error=From requires");
    exit();
}

else{
    $sql="SELECT *FROM busdata WHERE _from='$from' AND _To ='$To'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        //echo "<h1 style=text-align:center;color:green;font-weight:900>WELCOME $from.$to</h1>";
       if($row['_from']===$from && $row['_To']=$To){
        header("Location:../Payment/paymentproc.php?");
        exit();
       }
    }
}

?>