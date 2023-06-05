<?php 
$conn = mysqli_connect('localhost' , 'SharifaHana', '123456' , 'CyberHunt');
if(mysqli_connect_errno()){
    echo 'Faild to connect to MYSQL'.mysqli_connect_errno(); 
}
?>