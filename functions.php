<?php
function check_login($con)
{
	if(isset($_session['user_id']))
	{
		$id=$_session['user_id'];
		$query="select * from login where user_id='$id' limit 1";
		$result=mysqli_query($con,$query);
		if($result && mysql_num_rows($result)>0)
		{
			$user_data=mysql_fetch_assoc($result);
			return $user_data;
		}
	}
	header("location:login.html");
	die;
}
function random_num($length)
{
    $text="";
    if($length<5)
    {
    	$length=5;
    }
    $len=rand(4,$length);
    for ($i=0; $i<$len  ; $i++) { 
   	// code...
    	$text.=rand(0,9);
    }
    return $text;
}
?>