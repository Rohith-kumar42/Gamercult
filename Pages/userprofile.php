<?php 
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "games"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define user ID
$user_id = 7;

// Prepare and execute the query
$collect_client = $conn->prepare('SELECT username FROM `users` WHERE id = ?');
$collect_client->bind_param("i", $user_id); // "i" stands for integer
$collect_client->execute();

// Fetch the result
$result = $collect_client->get_result();
$row = $result->fetch_assoc();
$username = $row['username'];

// Output the username
echo "<div id='hello'> Hello $username</div>";

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/home-stylesheet.css">
        <link href="https://fonts.cdnfonts.com/css/wicked-steam" rel="stylesheet">
        <link rel="icon" type="image/png" href="../assets/Images/Gamer_cult.png" style="width: 150%;">         
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
          @import url('https://fonts.cdnfonts.com/css/wicked-steam');
          body{
            font-family: 'Wicked Steam', sans-serif;
            background-color: #212529;
          }
          .welcome_header_ctn {
    background: url(https://community.akamai.steamstatic.com/public/images//bg_highlight.png);
    background-position: bottom;
    background-repeat: no-repeat;
    position: relative;
    margin: 0px auto;
    margin-left: 100px;
    text-align: center;
    font-family: "Motiva Sans", "Twemoji", "Noto Sans", Helvetica, sans-serif;
    font-weight: normal;
    height: 173px;
    padding-top: 30px;
    color: white;
    margin-top: -300px;
   
}
#subHead {
    text-align: left;
    margin: 0px 0px 0px 16px;
    color: #9099a1;
    font-size: 22px;
    margin-left: 180px;
}
#hello {
    text-align: left;
    margin: 8px 0px 0px 12px;
    font-size: 48px;
    color: #fff;
    margin-left: 180px;
    font-weight: bold;
}
#description {
    margin-top: 40px;
    font-weight: normal;
    text-align: left;
    width: 650px;
    padding-right: 80px;
    padding-left: 80px;
    padding-top: 40px;
    padding-bottom: 30px;
    float: left;
    background: -webkit-linear-gradient( top, rgba( 64, 128, 183, 0.4) 5%, rgba( 64, 128, 183, 0.2) 95%);
    background: linear-gradient( to bottom, rgba( 64, 128, 183, 0.4) 5%, rgba( 64, 128, 183, 0.2) 95%);
    box-shadow: 0px 0px 3px 0px rgba(20,20,20,0.75);
    margin-left: 250px;
}
#description h2 {
    font-size: 20px;
}
h2 {
    color: #67c1f5;
    text-decoration: none;
    font-family: "Motiva Sans", "Twemoji", "Noto Sans", Helvetica, sans-serif;
    font-weight: 300;
    font-weight: normal;
    font-size: 18px;
}
h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
#description p {
    font-size: 16px;
    line-height: 22px;
}
p {
    font-size: 13px;
    color: #9099a1;
    margin-top: 2px;
    margin-bottom: 12px;
    padding: 0px;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
#rightTextContainer {
    float: right;
    margin-top: 8px;
    padding-right: 12px;
    text-align: left;
    width: 304px;
    height: 414;
}
h1 {
    font-size: 14px;
    color: #cccccc;
    margin: 0px;
    padding: 0px;
    font-weight: normal;
   font-family: "Motiva Sans", "Twemoji", "Noto Sans", Helvetica, sans-serif;
    font-weight: bold;
}
.btn_medium > span, input.btn_medium {
    padding: 0 15px;
    font-size: 15px;
    line-height: 30px;
}
.btn_border_2px > span {
    border-radius: 3px;
}
.btn_green_white_innerfade > span {
    border-radius: 2px;
    display: block;
    background: #799905;
    background: -webkit-linear-gradient( top, #799905 5%, #536904 95%);
    background: linear-gradient( to bottom, #799905 5%, #536904 95%);
}
.btn_green_white_innerfade {
    border-radius: 2px;
    border: none;
    padding: 1px;
    display: inline-block;
    cursor: pointer;
    text-decoration: none !important;
    color: #D2E885 !important;
    background: #a4d007;
    background: -webkit-linear-gradient( top, #a4d007 5%, #536904 95%);
    background: linear-gradient( to bottom, #a4d007 5%, #536904 95%);
}
  
body.apphub_blue {
    background: #1b2838;
    color: #636363;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
ul {
    list-style-type: disc;
    list-style-position: inside;
}
ul {
    font-size: 12px;
    line-height: 1.5em;
    color: #9099a1;
    text-indent: 0px;
    list-style-position: outside;
    list-style-image: url(https://community.akamai.steamstatic.com/public/images/skin_1/arrow.gif);
    list-style-type: square;
    padding-left: 12px;
    margin: 2px;
}
user agent stylesheet
div {
    display: block;
}
.container-fluid a{
    color: #007bff;
}
.menuitem{
    color: white;
}
body{
    font-family: "Motiva Sans", "Twemoji", "Noto Sans", Helvetica, sans-serif
}
.navlink{
    font-size: 40px;
}
</style>

      </head>
        
        <nav class="d-flex navbar navbar-expand-md darkNav navbar-dark" style="height: 70px;">
            <!-- Toggler/collapsibe Button -->
            <!-- <span class="d-md-none d-block" style="cursor:pointer" onclick="openNav()"><img width="30px" height="30px" src="https://icon-library.com/images/hamburger-menu-icon-png-white/hamburger-menu-icon-png-white-10.jpg"></span> -->

            <div id="myNav" class="overlay" style="color: white;font-size: 20px;">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img width="30px" height="30px" src="https://icon-library.com/images/hamburger-menu-icon-png-white/hamburger-menu-icon-png-white-10.jpg"></a>
              <div class="overlay-content">
                <ul class="navbar-nav pl-4 pt-1">
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="../pages/homeuki.html" data-toggle="dropdown">
                        Store
                      </a>
                      <div style="background-color: #171a21;" class="dropdown-menu">
                        <a class="menuItem" href="../pages/homeuki.html">Home</a>
                        <a class="menuItem" href="../pages/discoveryqueue.html">Discovery Queue</a>
                        <a class="menuItem" href="../pages/wishlist.html">Wishlist</a>
                        <a class="menuItem" href="../pages/homeuki.html">Points Shop</a>
                        <a class="menuItem" href="../pages/news.html">News</a>
                        <a class="menuItem" href="../pages/stats.html">Stats</a>
                      </div>
                    </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../pages/homeuki.html">Support</a>
                    </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="../pages/homeuki.html">Account</a>
  
                    <div style="background-color: #171a21;" class="dropdown-menu">
                      <a class="menuItem" href="../index.html">Login</a>
                      <a class="menuItem" href="Sign-up.html">Sign Up</a>
                    </div>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="mx-auto bg">
            <a class="float-left" href="homeuki.html"><img
                class="logoBig" src="../assets/Images/Gamer cult.png" style="width: 150px; position: relative; left: -150px; top: 3px; right: 20px;"></a>
            
            <!--Navbar-->
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="position: relative; left: 300px;">
              <ul class="navbar-nav pt-1">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="../pages/homeuki.html" data-toggle="dropdown">
                      Store
                    </a>
                    <div style="background-color: #171a21;" class="dropdown-menu">
                      <a class="menuItem" href="../pages/homeuki.html">Home</a>
                      <a class="menuItem" href="../pages/discoveryqueue.html">Discovery Queue</a>
                      <a class="menuItem" href="../pages/wishlist.html">Wishlist</a>
                      <a class="menuItem" href="../pages/homeuki.html">Points Shop</a>
                      <a class="menuItem" href="../pages/news.html">News</a>
                      <a class="menuItem" href="../pages/stats.html">Stats</a>
                    </div>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Pages/support.html">Support</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="../pages/homeuki.html">Account</a>

                  <div style="background-color: #171a21;" class="dropdown-menu">
                    <a class="menuItem" href="../index.html">Login</a>
                    <a class="menuItem" href="Sign-up.html">Sign Up</a>
                  </div>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="../Pages/about 1.html">About</a>
                </li>
              </ul>
            </div>
        </div>
        

        <div class="btn-group">
          <button type="button" class="d-none d-md-block btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img width="20px" height="20px" src="../assets/Images/user-profile-circle.png" style="margin-top: -3px; margin-right: 7px;">Profile
          </button>
          <div class="dropdown-menu" style="background-color:#3786c6;  margin-top: 5px; width: fit-content;margin-left: -40px;max-width: 50px;">
              <a class="dropdown-item" href="../Pages/ukiprofile.html" style="color:black;background-color: white;">View My Profile</a>
              <a class="dropdown-item" href="../Pages/ukiaccount.html" style="color:black;">Account Details</a>
              <a class="dropdown-item" href="Home.html" style="color: black;">Signout</a>
              <!-- Add more dropdown options as needed -->
          </div>
      </div>
      
        

          </nav>
          <div 
          class="caption">
             <img style="width: 40%; height: 40%; visibility: hidden;" src="../assets/Images/Sale.png" id="Sale">
         </div>
     </div>

     <div id="main" style="position: relative;" class="container-fluid">
       <div class="sidebar d-none d-xl-block" style="padding-right: 10px;">
         <img src="../assets/Images/giftcard.png" width="250px">
         <h5>GIFT CARDS</h5>
         <a href="../pages/homeuki.html">Now Available on GC</a>
         <h5>RECOMMENDED</h5>
         <a href="../pages/homeuki.html">By Friends</a>
         <br>
         <a href="../pages/homeuki.html">By Curators</a>
         <br>
         <a href="../pages/homeuki.html">Tags</a>
         <br>
         <h5>DISCOVERY QUEUES</h5>
         <a href="../pages/homeuki.html">Recommendations</a>
         <br>
         <a href="../pages/homeuki.html">New Releases</a>
         <br>
         <h5>BROWSE CATEGORIES</h5>
         <a href="../pages/homeuki.html">Top Sellers</a>
         <br>
         <a href="../pages/homeuki.html">Recently Updated</a>
         <br>
         <a href="../pages/homeuki.html">New Releases</a>
         <br>
         <a href="../pages/homeuki.html">Upcoming</a>
         <br>
         <a href="../pages/homeuki.html">Specials</a>
         <br>
         <a href="../pages/homeuki.html">Virtual Reality</a>
         <br>
         <a href="../pages/homeuki.html">Steam Controller Friendly</a>
         <h5>BROWSE BY GENRE</h5>
         <a href="../pages/homeuki.html">Free to Play</a>
         <br>
         <a href="../pages/homeuki.html">Early Access</a>
         <br>
         <a href="">Action</a>
         <br>
         <a href="../pages/homeuki.html">Adventure</a>
         <br>
         <a href="../pages/homeuki.html">Casual</a>
         <br>
         <a href="../pages/homeuki.html">Indie</a>
         <br>
         <a href="../pages/homeuki.html">Massively Multiplayer</a>
         <br>
         <a href="../pages/homeuki.html">Racing</a>
         <h5>RECENTLY VIEWED</h5>
         <a href="../pages/homeuki.html">Apex Legends</a>
         <br>
         <a href="../pages/homeuki.html">CSGO</a>
         <br>
         <a href="../pages/homeuki.html">Destiny: 2</a>
       </div>
       <div class="welcome_header_ctn">
        <div class="welcome_header">
        echo "<div id='hello'> Hello $username</div>";

            <div id="subHead">Welcome to The GC Community</div>
        </div>
    </div>
       <div id="description">
        <h2>Forge your gaming identity. Connect. Conquer.</h2>
        <p>
            

            Elevate your gaming persona and immerse yourself in a thriving community. The Gamer Cult is your hub to connect with friends, monitor their gaming endeavors, initiate or join epic battles, or simply unwind and engage in lively conversations. Boasting a colossal community, discovering new companions and gaming clans is a breeze.
            
            Craft your legacy, amplify your connections, and revel in the camaraderie of The Gamer Cult. Your journey to victory begins here.                <br>
    
    </div>
    <div id="rightTextContainer" style="margin-right: 200px;">
        <div id="info" >
        <h2>
        Get Started Now!		</h2>
        <p style="margin-top: -10px;">Setup your profile, start a group and invite some friends!</p>
        <div class="Info_break"><img src="https://community.akamai.steamstatic.com/public/images//skin_1/1px_welcome.gif" height="1"></div>
        <h1 style="margin-top: -20px;">First, click this attractive button.</h1>
        <div id="btn" style="margin-top: 15px;">
            <a href="../index.html" class="btn_green_white_innerfade btn_border_2px btn_medium" previewlistener="true"><span>Setup GC Profile</span></a>
            
        </div>
        <br>
        <div class="Info_break"><img src="../assets/Images/1px_welcome.gif" height="1"></div>
        <h1 style="margin-top: -30px;">And then...</h1>
        <ul>
            <li>Create a personalized profile</li>
            <li>Easily play games with your friends</li>
            <li>Create &amp; join groups</li>			<li>Use chat rooms, game lobbies and voice chat</li>
            <li>Access Steam from within any game</li>
            <li>Track gameplay stats</li> 
            <li>Calendar to schedule games</li>
        </ul>
        </div>
    </div>
</html>
