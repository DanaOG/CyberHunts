<?php 
require('DB_connection.php');
if(isset($_POST['submit']))
{
    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $author = stripcslashes($author);
    $content = stripcslashes($content);
    $title = stripcslashes($title);
    $query = "INSERT INTO article(title, author, content) VALUES(?, ?, ?)";
    $stmt = mysqli_prepare($conn , $query);
    mysqli_stmt_bind_param($stmt , "sss" , $title , $author , $content);
    mysqli_stmt_execute($stmt);
    if(mysqli_stmt_affected_rows($stmt) == 1){
        include('admin.php');
    } else {
        echo 'ERROR: '. mysqli_error($conn);
    }
    
}
?>