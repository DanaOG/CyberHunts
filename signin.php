<?php
    session_start();
    if(count($_POST)>0) 
    {
        require('DB_connection.php');
        $username=mysqli_real_escape_string($conn,$_POST["uname"]);
        $username=stripcslashes($username);
        $res = mysqli_query($conn,"SELECT * FROM user WHERE username= '$username'");
        $itr = mysqli_fetch_assoc($res);
        mysqli_free_result($res);
        $hashed_password = $itr["password"];
        $entered_password=mysqli_real_escape_string($conn,$_POST['password']);
        $entered_password=stripcslashes($entered_password);
        if(password_verify($entered_password, $hashed_password))
        {
            $result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_POST["uname"] . "' and password = '".$hashed_password."'");
            $row = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            $_SESSION["id"] = $row['username'];
            $_SESSION["l_name"] = $row['l_name'];
            $_SESSION["name"] = $row['f_name'];
            $_SESSION["priv"] = $row['Privilege'];
            $_SESSION["email"] = $row['email'];
            if($_SESSION["priv"] == "U")
            {
                include("Profile.php");
            }
            if($_SESSION["priv"] == "A")
            {
                include("admin.php");
            }
        } 
        else 
        {
            echo '<script> alert("Invalid Username or Password!");</script>';
            include("signin.html");
        }
    }