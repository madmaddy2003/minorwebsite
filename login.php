<?php
include("connection.php");
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql="select*from login where username='$uname' and password='$pass'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
    echo"<h1><center> login successful </center><h1>";
}
else{
    echo"<h1> login failed.please enter valid username and password.</h1>";
}
?>
