<?php 
session_start();
require('DB_connection.php');
if(isset($_POST['save']))
{
    // Get form data
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $fname = stripcslashes($fname);
    $lname = stripcslashes($lname);
    $username = $_SESSION["id"];
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $email = stripcslashes($email);
    $query = "UPDATE user SET f_name='$fname', l_name ='$lname', email='$email'
    WHERE username ='$username'";
    if(mysqli_query($conn, $query)){
        echo '<script language="javascript">';
        echo 'alert("Credientionls updated successfully")';
        echo '</script>';
        include("index.php");
    } else {
        echo 'ERROR: '. mysqli_error($conn);
    }
    
}
?>