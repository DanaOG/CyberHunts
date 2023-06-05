<?php

require('DB_connection.php');
$art_id= mysqli_real_escape_string($conn , $_GET['art_id']);
$query = 'SELECT * FROM article WHERE art_id ='.$art_id;
$result = mysqli_query($conn, $query);
$article = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conn);

$cmd = "ping";
$output=exec($cmd);
?>

<!DOCTYPE html>
<html>
<head>
<title>Article Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<!--<link rel="stylesheet" type="text/css" href="css/article.css">-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<article class="post">
  <div>
    <div class="absolute-bg" ></div>
  </div>
  <div class="post__container" >
    <span class="post__category">Created by <?php echo $article['author']; ?></span>
    
    <div class="post__content">
      <header>
        <time class="post__time">Article <?php echo $article['art_id']; ?></time>
        <h1 class="post__header" style="text-align:center"><span><?php echo $article['title']; ?></span></h1>
      </header>
    
      <p class="post__text"><?php echo $article['content']?></p>
      <?php echo "$output";?>
    </div>
    <div class="post__link" style="text-align:center">
      <a href="index.php">Home</a> | <a href="newtrends.php">Other Articles</a>
      
    </div>
  </div>
</article>
</html>    