<?php
    session_start();
    require('DB_connection.php');
    $query = 'SELECT * FROM article'  ;
    $r = mysqli_query($conn , $query);
    $article = mysqli_fetch_all($r , MYSQLI_ASSOC);    
?>
<!DOCTYPE html>
<html>
<head>
<title>New Trends</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="css/bootstrap.css">   
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
</head>
<body>
 
<!-- Sidebar/menu -->
<!--<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Cyber Hunts<br></b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="SignIn.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a> 
    <a href="SignUp.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sign Up</a> 
  </div>
</nav>-->
    
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
    <h1 class="w3-xxxlarge w3-text-black"><b>New Trends</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!-- content grid (modal) -->
<?php foreach($article as $a): ?>
  <div class="card border-primary mb-3">
      <div class="card-header">Article <?php echo $a['art_id']?></div>
    <div class="card-body">
        <h3 class="card-title"><?php echo $a['title']?></h3>
        <p><?php echo $a['author']?></p>
        <a class="btn btn-primary" href="Article.php?art_id=<?php echo $a['art_id']; ?>">Read More</a>
    </div>
  </div>
<br><br><br>
<?php endforeach; ?>
</div>
    
<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Web Tech and Security - <a href="Names.php" title="W3.CSS" target="_blank" class="w3-hover-opacity">Group 3</a></p></div>
    

    
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