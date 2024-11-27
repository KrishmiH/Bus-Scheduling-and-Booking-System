<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="Signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">


<script src="Signup.js"></script>
    <script src="https://kit.fontawesome.com/8287f68ef3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <img src="img/bus.png" height="45px">
        <h2><span>B</span>us<span>Pa</span>ss</h2>
        <div class="humberger" id="hum">
            <button type="button"onclick="active()"><i class="fa-solid fa-bars"></i></button>
        </div>
        <nav class="navigation" id="navi" >
            <ul id="ul">
                <li><a href="../Home/home.php" class="active">Home</a></li>
                <li><a href="../About US/about us.php">About Us</a></li>
                <li><a href="../Home/from/index.php">Contact Us</a></li>
                <button><a href="../Log-in/index.php">Login</a></button>
                <button><a href="SignUp.php">Sign up</a></button>
                <i class="fa-solid fa-user fa-2xl" style="color: #babec5;"></i>
        </nav>
    </header>
 
<div class="home">
    <section>
        <img src="img/46228.jpg" alt="Bus image" width="130px">
    </section>

<div class="Sign-Up">
        <h1>Sign Up</h1>
        <form action="datapass.php" method="POST">
            <label>First Name</label>
            <input type ="text" name="fname" id="fname" place holder="">

            <label>Last Name</label>
            <input type ="text" name="lname" id="lname" place holder="">

            <label>Email</label>
            <input type ="email" name="mail" id="mail" place holder="">

            <label>Password</label>
            <input type ="Password" name="pword" id="pword" place holder="">

            <label>Conformation Password</label>
            <input type ="Password" name="cpword" id="cpword" place holder="">
            <p id="passwd"></p>

            <input type ="submit" value="Submit" onclick="password()" name="btn" id="btn"class="btn"place holder="">
    
        
        </form>
        
        <p>By clicking  the Sign Up button, You agree to our <br>
        <a href="../Terns/terms.php"> Terms and Conditions </a> and <a href="#">Policy and Privacy</a>
        </p>
     </div>
    </div>
<br><br>
    <div class="footer">
    <footer>
              <div class="col1">
                <img src="img/bus.png" height="45px" >
                <p>Bus ticket made easy</p>
              </div>
             <div class="col">
                <ul class="ul2">
                    <li><a href="../Terns/terms.php">FAQ</a></li>
                    <li><a href="../Terns/terms.php">Privacy</a></li>
                    <li><a href="../Terns/terms.php">Support</a></li>
                   
                </ul>
             </div>
             <div class="col">
                <ul class="ul2">
                    <li><a href="../Terns/terms.php">Offers</a></li>
                    <li><a href="../Terns/terms.php">Agents</a></li>
                    <li><a href="../Terns/terms.php">Bus Operators</a></li>
                    <li><a href="../Terns/terms.php">Routes</a></li>
                    <li><a href="../Terns/terms.php">Service Update</a></li>
                </ul>
             </div>
             <div class="col">
                <h3>Follow Us</h3>
                <i class="fa-brands fa-facebook fa-lg"></i>
                <i class="fa-brands fa-twitter fa-lg"></i>
                <i class="fa-brands fa-instagram fa-lg"></i>
                <i class="fa-brands fa-google-plus fa-lg"></i>
             </div>
             <div class="col">
                <h3>Payments</h3>
                <img src="img/4_Card_color_horizontal-footer-18.png" height="50px">
             </div>
    </footer>
</div>
</body>
</html>