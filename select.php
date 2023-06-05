<?php 
    $file=$_GET["page"];
    if($file != "index.php" && $file != "newtrends.php" && $file != "Profile.php" && $file != "admin.php" && $file != "signin.html" && $file != "SignUp.html" && $file != "Article.php" && $file != "logout.php")
        echo "ERROR: File is not Found!";
    else
        include($file);

?>