<?php
session_start();
   include("connection.php");
   include("functions.php");


   if($_SERVER['REQUEST_METHOD']=="POST")
   {
       $user_name=$_POST['username'];
       $password=$_POST['password'];
       $conf=$_POST['confirm'];
       if(!empty($user_name) && !empty($conf) && !empty($password) && !is_numeric($user_name) && $password==$conf)
       {
          $user_id=random_num(20);
          $query="insert into login (user_id,user_name,password) values('$user_id','$user_name','$password')";
          mysqli_query($con,$query);
          
          sleep(3);
          header("location:login.html");
          die;
       }
       else if($password!=$conf)
       {
         
         
      sleep(3);
          header("location:signup.html");
          die;
       }
       else
       {
          header("location:signup.html");

          die;
       }
   }
?>
