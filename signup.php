<?php 

require('DB_connection.php');

if(isset($_POST['submit']))
{
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);

    //hashing 
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password=stripcslashes($password);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fname=stripcslashes($fname);
    $lname=stripcslashes($lname);
    $uname=stripcslashes($uname);
    $email=stripcslashes($email);

    $query = "INSERT INTO user (f_name, l_name, username, password, email, Privilege) VALUES (?, ?, ?, ?, ?, 'U')";
    $stmt = mysqli_prepare($conn , $query);
    mysqli_stmt_bind_param($stmt , "sssss" , $fname , $lname , $uname, $hashed_password, $email);
    mysqli_stmt_execute($stmt);
    if(mysqli_stmt_affected_rows($stmt) == 1)
    {
        include('signin.html');
    } else 
    {
        echo 'ERROR: '. mysqli_error($conn);
    }
}
?>