<?php
 session_start();
 if(isset($_session['user_id']))
{
	unset($_session['user_id']);
}
header("location:login.php");
die;