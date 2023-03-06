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
          $query="select *from login where user_name='$user_name' limit 1";
          $result=mysqli_query($con,$query);
          if($result)
          {
          	if($result && mysqli_num_rows($result)>0)
		    {
			 $user_data=mysqli_fetch_assoc($result);
			 if($user_data['password'] === $password)
			 {
			 	$_SESSION['user_id'] = $user_data['user_id'];
			 	header("location:home.html");
                die;
			 }
         }
      }
      echo "please enter valid username and password";
   }

else
{
       	echo "please enter  username and password ";
}
       header("location:login.html");
                die;
   }
?>
