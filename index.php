<?php 
    require('DB_connection.php');
    $query = 'SELECT * FROM contact';
    $r = mysqli_query($conn , $query);
    $contact = mysqli_fetch_all($r , MYSQLI_ASSOC);    
?>
<?php
 
    session_start();
  
?>

<!DOCTYPE html>
<html>
<head>
<title>Cyber Hunts</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.button {
  border: round;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button {background-color: red;} 
</style>
<?php 
  include("nav.php");
?>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
  <span>C/H</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container " style="margin-top:80px" id="mainName">
    <h1 class="w3-jumbo"><b>Cyber Hunts</b></h1>
    <h1 id='heats' class="w3-xxxlarge w3-text-black"><b>Heats</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
        <a href="https://www.f5.com/pdf/case-study/global-financial-services-company-grows-revenue-case-study.pdf"><img src="pictures/F5.png" style="width:90%" alt="F5 Case Study"></a>
    </div>

    <div class="w3-half">
        <a href="https://www.f5.com/pdf/case-study/f5-helps-digital-bank-detect-177-percent-more-fraud-than-existing-fraud-solutions.pdf"><img src="pictures/Fraud.png" style="width:90%" alt="F5 Case Study"></a>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Description -->
  <div class="w3-container" id="description" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Description.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We are "Cyber Hunters" a group of Passionate cyber security reporters, we focus on what's the latest news, trends, and heats in cyber-security world that designed for people like us !</p>
    <p> You can find trends in the latest vulnerabilities, attacks, and more and ways to mitigate them. Also, we report the latest inventions and news. You can find all events and conferences around the world by subscribing to our website. Lastly - Don’t hesitate to find more !
    </p>
  </div>
  
  <!-- Tips -->
  <div class="w3-container" id="tips" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Tips.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Most important tips to have secure experience while connected to the internet.</p>
    <p>The Internet is ultimately made up of people. The growth of the Internet has been dependent on voluntarily working together and cooperating. The success and promise of the Internet continue to depend heavily on cooperation and collaboration fpr ultimate security.
    </p>
    <p><b>Our tips for you:</b></p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="pictures/vpn.png" alt="vpn" style="width:100%">
        <div class="w3-container">
          <h3>Vpn</h3>
          <p class="w3-opacity" style="color: red">For secure connection </p>
          <p>Provides an encrypted communication and it hides your IP address from corporations and hackers.<br> A VPN protects your identity even if you are using public or shared Wi-Fi, and your data will be kept private from any prying intern.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="pictures/ad.png" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Adblocker</h3>
          <p class="w3-opacity" style="color: red">Install a Reliable Adblocker</p>
          <p>Ad blocking is generally safe, but you should always choose a reliable ad blocking software. However, you should also note that ad blockers don't replace anti-malware software and won't fully protect you from malware and viruses. All they do is hide online ads from you</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="pictures/cookie.webp" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Coookies</h3>
          <p class="w3-opacity" style="color: red"> Disable Unwanted Cookies</p>
          <p>By disabling cookies you will see fewer targeted ads of your prefrence.<br> Without cookies, website owners, especially third-parties, won't be able to track your activity and count how many times you visit their sites or which sites or products you prefer</p>
        </div>
      </div>
    </div>
  </div>
    
 <!-- Trends -->
  <div class="w3-container" id="trends" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Trends.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
      <p>In <a href="select.php?page=newtrends.php">trend's page</a>, we share up-to-date case studiesa that are related to Cyber Security</p>
  </div>
 
  <!-- Feedback -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Feedback.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you have something to say? Fill out the form and fill me in with the details :) We love meeting new people!<br>Your comment will be presented in our website please use your word carefully :&#41;</p>
    <form method="post" action="contact.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="email" name="email" required pattern="^(?=.**[A-Z])(?=.**[a-z])(?=.**\d)(?=.**[@$!%**#?&])[A-Za-z\d@$!%**#?&]{8,}$" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="submit" id="submit_form">Send Message</button>
    </form>
      <?php foreach($contact as $c): ?>
      <div class="card border-primary mb-3">  
        <h5 class="card-body"><?php echo $c['message'] ?></h5>
        <small class="card-header">Name: <?php echo $c['name'] ?></small>
      </div>
      <?php endforeach; ?>
      
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="index.php#tips">Tips</a></li>
                            <li><a href="newtrends.php">Trends</a></li>
                            <li><a href="index.php#heats">Heats</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="index.php#description">About us</a></li>
                            <li><a href="#top">Team</a></li>
                            <li><a href="index.php#contact">Feedback</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <p class="copyright">Cyber Hunts © 2023</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>