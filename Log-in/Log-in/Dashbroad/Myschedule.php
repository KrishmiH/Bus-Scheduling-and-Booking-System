<?php
include "connection.php";
$query= "Select * from myschedule";
$result=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedules</title>
    <link rel="stylesheet" href="History.css">
    <script src="https://kit.fontawesome.com/8287f68ef3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background:grey">
    <header style="text-decoration:none">
        <img src="img/bus.png" height="45px">
        <h2><span>B</span>us<span>Pa</span>ss</h2>
        <div class="humberger" id="hum">
            <button type="button"onclick="active()"><i class="fa-solid fa-bars"></i></button>
        </div>
        <nav class="navigation" id="navi" >
            <ul id="ul">
              <li><a href="Dashbroad.php" style="text-decoration: none;">Dashbroad</a></li>
              <li><a href="MySchedules.php" style="text-decoration: none;"class="active">MySchedules</a></li>
              <li><a href="History.php"style="text-decoration: none;">History</a></li>
              <button><a href="../Log-in/index.php"style="text-decoration: none;">Logout</a></button>
              <i class="fa-solid fa-user fa-2xl" style="color: #babec5;"></i>
                </ul>
        </nav>
    </header>
    <div class="table">
    <!---bosstrap table--->
    <td><button type="button" class="btn btn-danger"><a href="Cancle.php" style="color:black;text-decoration:none;" >Cancle</a></button><br><br>
    <table class="table table-dark table-hover">

            <tr>
                <th>Reg No</th>
                <th>Dep.Time</th>
                <th>Arr.Time</th>
                <th>Bus Name</th>
                <th>Type</th>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
             $RegNo=$row['regno'];
             $Arrtime=$row['Atime'];
             $DepTime=$row['Dtime'];
             $busname=$row['Busname'];
             $Type=$row['type'];
            
            
            ?>
            <tr>
            <td><?php echo $RegNo?></td>
            <td><?php echo $Arrtime?></td>
            <td><?php echo $DepTime?></td>
            <td><?php echo $busname?></td>
            <td><?php echo $Type?></td>
            </tr>
            <?php
            }
            ?>
        </table>
       </div>
    </body>
    </html>