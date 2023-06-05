<?php 
session_start();
require('DB_connection.php');
if(isset($_POST['ping']))
{
    $par=$_POST['connection'];
    $address=$_REQUEST['pingVal'];
    $pattern = "/^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$/";
    if(preg_match($pattern, $address)){
        $output=shell_exec("ping -c 4 ".$address);}
    else
    {
        $output="The input is not valid";
    }
}
?>

<html>
    <h1> The result of the ping </h1>
    <p><?php echo $output; ?></p>
    <a href="admin.php">Back</a>
</html>