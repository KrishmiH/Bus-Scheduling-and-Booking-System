<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/8287f68ef3.js" crossorigin="anonymous"></script>
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background: #555;
}

html {
  box-sizing: border-box;
}

.head-text{
  font-size: 65px;
}
*, *:before, *:after {
  box-sizing: inherit;
  list-style: none;
  text-decoration: none;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  margin: 4px;
}

.about-section {
  padding: 10px;
  text-align: left;
  background-color: #474e5d;
  color: white;
  font-size: 20px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.flex{
display: flex;
font-size: 25px;
background-color: #474e5d ;
color: white;
justify-content: space-around;
}
.first{
  display: block;
}
.logo{
  text-align: center;
  font-size: 85px;
  position: relative;
  top:25px;
  color:darkblue;
  text-decoration:underline;
}
.logo-text{
  text-align: center;
  font-family:monospace;
}

fieldset
{
  background-color:#1e1313;
  max-width:500px;
  padding:16px;	
}
legend
{
  margin-bottom:0px;
  margin-left:16px;
}
/*header*/
header{
    width:100%;
    height:80px;
    background: #11101b;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:0 100px;
   
    
}
header h2{
    color: white;
}
header h2 span{
    color: orange;
}
.humberger{
    display: none;
}
.navigation ul{
    display: flex;
}
.navigation ul li a{
    display: block;
    color:#fefefe;
    font-size:20px;
    padding: 10px 25px;
    border-radius: 50px;
    transition: 0.5s;
    margin:0 5px;
}
a{
  color:black;
}
.navigation ul  button{
        padding: 10px;
        border: none;
        color:black;
        background: white;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 6.4px;
        margin: 4px 2px;
    }
   
.navigation ul i{
     margin-top: 25px;
     margin-left: 10px;
}
.navigation ul li a:hover{
    background: #fefefe;
    color:black
}
.navigation ul li a.active{
    color:black;
    background: #fefefe;
}

/*footer*/

footer{
    background: #11101b;
    color:#fefefe;
    height: 150px;
    display:flex;
    position: relative;
    top: 1800;
    justify-content: space-between;
}


.col ul a {
  color:#fefefe;
  padding: 10px;
}
@media screen and (min-width:700px){
    footer{
        flex:1;
    }
    .col5 h3{
        margin:10px;
    }
   
    footer{
        padding: 15px;
    }
    #sectionlg{
    position: relative;
    top:20px;
    }

}
</style>
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
          <li><a href="../Home/home.php" >Home</a></li>
          <li><a href="../Schedules/startSchedule.php">Schedules</a></li>
          <li><a href="../Home/from/index.php">Contact Us</a></li>
          <li><a href="About.us"class="active">About Us</a></li>
          <button><a href="../Log-in/index.php">Login</a></button>
          <button><a href="../Sign-up/SignUp.php">Sign up</a></button>
          <i class="fa-solid fa-user fa-2xl" style="color: #babec5;"></i>
            </ul>
    </nav>
</header>
<div class="flex">
  <img src="img/im1.jpg" width="50% height:40%">
<div class="about-section">
  <h1 class="head-text">About Us</h1>
  <div class="first">
  <p>Welcome to the Bus Scheduling and Reservation System - a software designed to revolutionize the transportation industry.<br> Our company was founded in 2015 with a mission to provide a more efficient and affordable way for people to travel by bus.We noticed that there was a gap in the market for a user-friendly and reliable scheduling and booking system, and we set out to fill that gap. Our software is developed with the aim to streamline the process of scheduling and booking bus services, making it more efficient and accessible for everyone.
  Our company believes in putting the customer first and delivering exceptional service at all times. We also value transparency and honesty in our business dealings and strive to maintain high levels of integrity in everything we do.
  Our team consists of experienced software developers, customer support representatives, and marketing specialists who are all dedicated to making our scheduling and booking system the best it can be. With years of experience in the industry, we're well-equipped to handle any challenge that comes our way.
  Our scheduling and booking system makes it easy for customers to book bus trips online. We offer real-time updates on bus schedules and routes and a range of payment options for added convenience. Our customer support team is available around the clock to assist with any questions or concerns.
  Unlike other scheduling and booking systems, we offer a user-friendly interface that makes booking and managing bus trips easy. Our system is also more affordable than other options on the market, making it accessible to a wider range of customers. We also offer a satisfaction guarantee to ensure that customers are completely happy with their experience.</p>
</div>

<fieldset>
  <legend>Our Misson</legend>
  Our misson is to provide a Secure and comfortable journey for customers
  </fieldset>
  <fieldset>
    <legend>Our Vision</legend>
    "Our vision is to be a leader in the bus transportation industry by developing innovative solutions that make travel more accessible, affordable, and sustainable."
  </fieldset>
  <h1 class="logo">BUS PASS</h1>
  <p class="logo-text">Make ticket booking easy</p>
 <div class="limg">
  <img src="img/ncg.png">
  <img src="img/new-way-express.png">
  <img src="img/annaimuthumari.png">
  <img src="img/al-rashith.png">
  <img src="img/superline.png">
 
</div> 
</div>
 </div>
<div class="section2">
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="@@@@@@" alt="Dineth" style="width:100%">
      <div class="container">
        <h2>Dineth</h2>
        <p class="title">CEO </p>
        <p>You can free to contact</p>
        <p>Dineth@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="@@@@" alt="Nisfa" style="width:100%">
      <div class="container">
        <h2>Nisfa</h2>
        <p class="title">Visual Director</p>
        <p>You can free to contact</p>
        <p>Nisfa@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="@@@@" alt="Anuradha" style="width:100%">
      <div class="container">
        <h2>Anuradha</h2>
        <p class="title">Security Analysis</p>
        <p>You can free to contact</p>
        <p>Anuradha@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="@@@@" alt="Krishmi" style="width:100%">
      <div class="container">
        <h2>Krishmi</h2>
        <p class="title">Art Director</p>
        <p>You can free to contact</p>
        <p>Krishmi@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="@@@@" alt="Shashini" style="width:100%">
      <div class="container">
        <h2>Shashini</h2>
        <p class="title">Creative Director</p>
        <p>You can free to contact</p>
        <p>Shashini@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="footer">
  <footer>
            <div class="col1">
              <img src="img/bus.png" height="45px" >
              <p>Bus ticket made easy</p>
            </div>
           <div class="col">
              <ul class="ul2">
                  <li><a href="">FAQ</a></li>
                  <li><a href="">Privacy</a></li>
                  <li><a href="">Support</a></li>
                 
              </ul>
           </div>
           <div class="col">
              <ul class="ul2">
                  <li><a href="">Offers</a></li>
                  <li><a href="">Agents</a></li>
                  <li><a href="">Bus Operators</a></li>
                  <li><a href="">Routes</a></li>
                  <li><a href="">Service Update</a></li>
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
