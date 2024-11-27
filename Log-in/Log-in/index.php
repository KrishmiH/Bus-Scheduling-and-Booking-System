<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Log in</title>
    <link rel="stylesheet" href="logstyle.css">
    <script src="https://kit.fontawesome.com/8287f68ef3.js" crossorigin="anonymous"></script>
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
                <button><a href="index.php">Login</a></button>
                <button><a href="../Sign-up/SignUp.php">Sign up</a></button>
                <i class="fa-solid fa-user fa-2xl" style="color: #babec5;"></i>
        </nav>
    </header>
    <br><br><br><br><br>
    <div class="Log-In">
        <h1>HI,Travels<br>-----Login-----</h1>
        <?php if(isset($_GET['error'])){
            $error=$_GET['error'];
        echo"<p class=error;>{$error}.!</p>";
        }?>
        <form action="Login.php" method="Post">
            

            <label for="mail">Email</label>
            <input type ="email" name="email" id="mail" place holder="">

            <label for="password">Password</label>
            <input type ="Password" name="Password" id="pword" place holder="">

            <input type ="submit" value="Login" name="btn" id="btn">
        </form>
        
        <p>By clicking  the Sign Up button, You agree to our <br>
        <a href="#"> Terms and Conditions </a> and <a href="#">Policy and Privacy</a>
        </p>

    </div>

    <p class="last">If you dont have acount? <a href="Signup.php">Sign Up Here</a></p>
    <p class="last" style="color:red">foget password? <a href="fogetpasswd/Resetpwd.php">Click here</a></p>
    <br><br><br><br><br>
    
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