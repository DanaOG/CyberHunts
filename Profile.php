<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.logo{
  text-align: center;
  justify-content: center;
}
.inline p{
   
    display: inline-block;
    line-height: 80px;
    vertical-align: top;
}
.photo{
  top: 20%;
  left: 50%;
}
.corner{
    border-radius: 10px;
    border-radius: 1px 15px 15px 10px;
}
fieldset {
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
border:2px solid rgb(0, 0, 1);
padding-bottom: 40px;
}

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
</head>
<body>
 
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h5 class="logo" ><b>Cyber Hunts<br></b></h5>
    <img src="pictures/UserLogo.jpg" alt="UserLogo" width="210px">

  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    
  </div>
  <div class="w3-bar-block">
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log Out</a> 
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>

</nav>
    
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
  <span>C/H</span>
</header>
    
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
  
    <div class="w3-container " style="margin-top:80px" id="mainName">
    <h6 class="w3-jumbo"><b><?php if($_SESSION["id"]) { ?> Welcome <?php echo $_SESSION["name"];}?> </b></h6>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>  
  
  <div class="corner" display="inline-block" style="margin-left:50px;margin-right:80px;background-color: rgb(234, 234, 234); padding-bottom: 10px; padding-left: 5px; padding-right: 5px;">
    <fieldset>
    <form action="save.php" method="post">
        <legend> <b>Account Information </b></legend>
        <label style="padding-left: 3px;">First Name &nbsp;&nbsp;</label> <input id="Fname" name="fname" type="text" value="<?php echo $_SESSION['name'] ?> " readonly> <br><br>
        <label style="padding-left: 3px;">Last Name &nbsp;&nbsp;</label><input id="Lname" name="lname" type="text" value="<?php echo $_SESSION['l_name'] ?> " readonly><br><br>
        <label style="padding-left: 3px;">Email &nbsp;&nbsp;</label><input id="email" name="email" type="text" value="<?php echo $_SESSION['email'] ?> " readonly><br><br>
        <button type="submit" id="save" name="save" style="background-color: rgb(212, 209, 209);" onclick="saveEdits()" disabled> Save </button> 
        
        </form>
        <button style="background-color: rgb(212, 209, 209);" onclick="edit()"> Edit Credentials</button> 
    </fieldset>
</div>


</div>
    
<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Web Tech and Security - <a href="Names.html" title="W3.CSS" target="_blank" class="w3-hover-opacity">Group 3</a></p></div>
    

    
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

function edit(){
  document.getElementById("Fname").readOnly=false;
  document.getElementById("Lname").readOnly=false;
  document.getElementById("email").readOnly=false;
 
  document.getElementById("save").disabled=false;
  

}

function saveEdits(){
  var fname=document.getElementById("Fname").value;
  var lname=document.getElementById("Lname").value;
  var email=document.getElementById("email").value;
  
}
</script>
</body>
</html>