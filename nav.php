
<meta charset="UTF-8">
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Cyber Hunts<br></b></h3>
  </div>
  <div class="w3-bar-block">
    <form method="get" action="select.php">
    <button name = "page" value="index.php" class="w3-bar-item w3-button w3-hover-white">Home</button>
    <a href="index.php#description" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Description</a> 
    <a href="index.php#tips" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tips</a>
    <button name = "page" value="newtrends.php" class="w3-bar-item w3-button w3-hover-white">New Trends</button> 
    <a href="index.php#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Feedback</a>
</form>
    
    
    <br><br><br><br><br><br><br><br>
        <?php 
      if (isset($_SESSION["id"]))
      {
          if ($_SESSION["priv"] == "U")
            {
              echo '<form method="get" action="select.php">';
                echo '<button name = "page" value ="Profile.php" class="w3-bar-item w3-button w3-hover-white">Profile</button>';
                echo '<button name = "page" value ="logout.php" class="w3-bar-item w3-button w3-hover-white">Logout</button>';
              echo '</form>';
            } 
          if($_SESSION["priv"] == "A")
            {
              echo '<form method="get" action="select.php">';
                echo '<button name = "page" value ="admin.php" class="w3-bar-item w3-button w3-hover-white">Article Management</button>';
                echo '<button name = "page" value ="logout.php" class="w3-bar-item w3-button w3-hover-white">Logout</button>';
                echo '</form>';
            }
      }
      else 
      {
        echo '<form method="get" action="select.php">';
          echo '<button name = "page" value ="signin.html" class="w3-bar-item w3-button w3-hover-white">Login</button>';
          echo '<button name = "page" value ="SignUp.html" class="w3-bar-item w3-button w3-hover-white"> Sign Up</button>';
        echo '</form>';
      } 
?>
  </div>
</nav>