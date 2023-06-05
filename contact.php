<?php 
require('DB_connection.php');
if(isset($_POST['submit']))
{
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $name = stripcslashes($name);
    $email = stripcslashes($email);
    $message = stripcslashes($message);
    $query ="INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn , $query);
    mysqli_stmt_bind_param($stmt , "sss" , $name , $email , $message);
    mysqli_stmt_execute($stmt);
    if(mysqli_stmt_affected_rows($stmt) == 1){
        require('index.php');
    } else {
        echo 'ERROR: '. mysqli_error($conn);}
}
?>