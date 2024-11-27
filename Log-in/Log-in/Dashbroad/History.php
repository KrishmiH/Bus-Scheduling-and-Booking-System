<?php
include "connection.php";
$query= "Select * from History";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body style="background:grey">
    <header>
        <img src="img/bus.png" height="45px">
        <h2><span>B</span>us<span>Pa</span>ss</h2>
        <div class="humberger" id="hum">
            <button type="button"onclick="active()"><i class="fa-solid fa-bars"></i></button>
        </div>
        <nav class="navigation" id="navi" >
            <ul id="ul">
            <li><a href="Dashbroad.php" style="text-decoration: none;">Dashbroad</a></li>
              <li><a href="Myschedule.php" style="text-decoration: none;">MySchedules</a></li>
              <li><a href="#"style="text-decoration: none;"class="active">History</a></li>
              <button><a href="../index.php"style="text-decoration: none;">Logout</a></button>
              <i class="fa-solid fa-user fa-2xl" style="color: #babec5;"></i>
                </ul>
        </nav>
    </header>
<h1 style="text-align:center; font-size:55px;">Last Bookings</h1>
   <div class="table">
   <table class="table table-dark table-hover">

        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Route</th>
            <th>Payment status</th>
            <th>Type</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
         $Date=$row['Date'];
         $time=$row['Time'];
         $Route=$row['Route'];
         $busname=$row['Payment'];
         $Type=$row['Ticket_type'];
        ?>
        <tr>
        <td><?php echo $Date?></td>
        <td><?php echo $time?></td>
        <td><?php echo $Route?></td>
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