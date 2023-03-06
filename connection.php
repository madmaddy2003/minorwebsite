<?php
 $host="localhost";
 $user="root";
 $password="";
 $dbName="mywebsite";
 if(!$con=mysqli_connect($host,$user,$password,$dbName))
 {
   die("failed to connect with database !!!");
 }

?>
