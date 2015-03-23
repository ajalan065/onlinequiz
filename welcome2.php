<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$usererr="";
		$passerr="";
		$user=$_POST['email'];
		$pass=$_POST['password'];
		session_start();
		$_SESSION['user']=$user;
		if(empty($user) && empty($pass))
		{
			echo "<script type='text/javascript'>alert('Fill up the fields to continue');</script>";
			echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
		}
		if(empty($pass) || empty($user))
		{
			if(empty($user))
			{
				echo "<script type='text/javascript'>alert('Enter your email address to continue.');</script>";
				echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Please give your password');</script>";
				echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
			}
		}
		else
		{
			if(!empty($user))
			{
					$usererr="success";
			}
			if(!empty($pass))
			{
				$passerr="success";
			}
			
			if($usererr=="success" && $passerr=="success")
			{
				$conn=mysql_connect("localhost", "root", "mukti123!");
				if(!$conn)
					echo "<script type='text/javascript'>alert('Server connection failed');</script>";
				else
				{
					$database="onlinequiz";
					mysql_select_db($database, $conn);
					$sql="SELECT * FROM participants WHERE USERNAME='$user'";
					$val=mysql_query($sql, $conn);
					$retval=mysql_fetch_assoc($val);
					echo "<script type='text/javascript'>location.assign('quiz1.php');</script>";
				}
				mysql_close($conn);
			}	
		}
	}
?>
