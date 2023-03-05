<?php
 $host="localhost";
 $user="root";
 $password="";
 $dbName="mywebsite";
 $con=mysqli_connect($host,$user,$password,$dbName);
 if(mysqli_connect_errno())
 {
    die("Failed to connect with mysql:".mysqli_connect_errno());
 }

?>
