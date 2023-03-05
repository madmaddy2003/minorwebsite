<?php
session_start();
   include("connection.php");
   include("functions.php");


   if($_SERVER['REQUEST_METHOD']=="POST")
   {
       $user_name=$_POST['username'];
       $password=$_POST['password'];
       if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
       {
          $user_id=random_num(20);
          $query="insert into login (user_id,user_name,password) values('$user_id','$user_name','$password')";
          mysqli_query($con,$query);
          header("location:login.html");
          die;
       }
       else
       {
       	echo "please enter valid username and password";
       }
   }
?>
