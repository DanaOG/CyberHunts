<?php 
    require('DB_connection.php');
    $query = 'SELECT * FROM article INNER JOIN fav_articles  ON article.art_id = fav_articles.art_id'  ;
    $query2 = 'SELECT * FROM article';
    $r = mysqli_query($conn , $query);
    $r2 = mysqli_query($conn , $query2);
    $article = mysqli_fetch_all($r , MYSQLI_ASSOC); 
    $article2 = mysqli_fetch_all($r2 , MYSQLI_ASSOC);
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
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
 
    
<!-- !Table Style! -->
<style>
table {  
  border: 1px solid #ddd;
  text-align: left;
 border-collapse: collapse;
  width: 100%;
}

    
th{
background-color: red;
  color: white;
  padding: 15px;
  text-align: center;
    border: 1px solid #ddd;

    
}
td {
  padding: 15px;
  text-align: center;
 border: 1px solid #ddd;

}

tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color: white;}
</style>
    
</head>
<body>
    
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:220px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        <img style="width:120px;
                    height:120px; margin-left:30px"src="pictures/Logo.png" alt="Avatar" class="avatar">
  <div class="w3-container" >
    <h3 class="w3-padding-64"><b>Cyber Hunts<br></b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="select.php?page=index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a> 
  </div>
</nav>
    
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px;margin-right:40px">
    
<!-- Header -->
  <div class="w3-container " style="margin-top:80px" id="mainName">
    <h6 class="w3-jumbo"><b>Welcome Admin <?php echo $_SESSION["name"];?> </b></h6><br>
  </div>
<!-- Articles Div -->
    
<div class="w3-row-padding" >
    
    <h3>All Articles</h3>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <div class="w3-light-grey" style="border-radius: 25px;padding-bottom:20px">
        <div style="overflow-x:auto;" id="t2">
        <table>
          <tr>
            <th>Articles</th>
            <th>Title</th>
            <th>author</th>
          </tr>
        <?php foreach($article2 as $a): ?>    
          <tr>
            <td>Article <?php echo $a['art_id']?></td><br>
            <td><?php echo $a['title']?></td>
              <td><?php echo $a['author']?></td>

            </tr>
        <?php endforeach; ?>
        </table>
            
        </div>
         <button style="padding: 15px;margin-left:650px;margin-top:10px;margin-bottom:10px;" onclick="Adding()">Add New Article</button> 
    </div>
</div>
<div class="w3-row-padding" >
    <form method="POST" action="ping.php">
    <h3>Check Connection</h3>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <div class="w3-light-grey" style="border-radius: 25px;padding-bottom:20px">
        <div style="overflow-x:auto;" id="t2">
          <input id = "pingVal" name="pingVal" type="text" style="padding: 15px;margin-left:100px;margin-top:10px;margin-bottom:10px;" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$"> 
        </div>
         <button id="ping" name="ping" style="padding: 15px;margin-left:100px;margin-top:10px;margin-bottom:10px;" value="ping">ping</button> 
         <p id="conncection"></p>
    </div>
        </from>
</div>
</div>
     <!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Web Tech and Security - <a href="Names.php" title="W3.CSS" target="_blank" class="w3-hover-opacity">Group 3</a></p></div>
   
</body>
    
<script>
    function Adding(){ 
      window.location.href = "AddArticle.html";
    }

</script>

</html>