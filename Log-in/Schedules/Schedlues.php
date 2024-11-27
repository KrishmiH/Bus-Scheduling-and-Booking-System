<?php
include "connection.php";
$query= "Select * from busdata";
$result=mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedules</title>
    <link rel="stylesheet" href="Schedlues.css">
    <script src="Signup.js"></script>
</head>
<body>
    <!---
    <header>
        <img src="img/bus.png" height="45px">
        <h2><span>B</span>us<span>Pa</span>ss</h2>
        <div class="humberger" id="hum">
            <button type="button"onclick="active()"><i class="fa-solid fa-bars"></i></button>
        </div>
        <nav class="navigation" id="navi" >
            <ul id="ul">
              <li><a href="../Home/home.php" >Home</a></li>
              <li><a href="../Schedules/schedules.php" class="active">Schedules</a></li>
              <li><a href="../Home/from/index.php">Contact Us</a></li>
              <li><a href="../About US/about us.php">About Us</a></li>
              <button><a href="../Log-in/index.php">Login</a></button>
              <button><a href="../Sign-up/SignUp.php">Sign up</a></button>
              <i class="fa-solid fa-user fa-2xl" style="color: #babec5;"></i>
                </ul>
        </nav>
    </header>--->
    <div class="find-sche">
    <br>
       <?php if(isset($_GET['error'])){
            $error=$_GET['error'];
        echo"<p class=error; style=color:red>{$error}.!</p>";
        }?>
    </div>
</form>
<h1 style="text-align:center; font-size:55px;">AVAIBLE BOOKINGS</h1>
   <div class="table">
    <table>
        <tr>
            <th>Reg No</th>
            <th>Dep.Time</th>
            <th>Arr.Time</th>
            <th>Bus Name</th>
            <th>Type</th>
            <th>Avaible<br> seats</th>
            <th>Action</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
         $RegNo=$row['RegNo'];
         $Arrtime=$row['Arrtime'];
         $DepTime=$row['Deptime'];
         $busname=$row['BusName'];
         $Type=$row['Type'];
         $Aseats=$row['AvaibleSeate'];
        
        ?>
        <tr>
        <td><?php echo $RegNo?></td>
        <td><?php echo $Arrtime?></td>
        <td><?php echo $DepTime?></td>
        <td><?php echo $busname?></td>
        <td><?php echo $Type?></td>
        <td><?php echo $Aseats?></td>
        <td><button><a href="filldata.php">book<a></button><td>
        </tr>
        <?php
        }
        ?>
    </table>
   </div>
   <div class="header2">
    <h2><span class="tag1">AVAIBLE OVER </span><br><span class="tag2">100,000+</span><br><span class="tag3">Journeys</span></h2>
    </div>

</body>
</html>