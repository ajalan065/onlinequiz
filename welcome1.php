<html>
<?php
	session_start();
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$usererr="";
		$passerr="";
		$user=$_POST['email'];
		$pass=$_POST['password'];
		if(empty($pass) || empty($user))
		{
			if(empty($user))
			{
				echo "<script type='text/javascript'>alert('Email cannot be empty');</script>";
				echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Password cannot be empty');</script>";
				echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
			}
		}
		else
		{
			if(!empty($user))
			{
				if(preg_match("/[^A-Za-z0-9_.]@/", $user))
				{
					echo "<script type='text/javascript'>alert('Invalid email address');</script>";
					echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
				}
				else
				{
					$usererr="success";
				}
			}
			if(!empty($pass))
			{
				if(preg_match('/[^A-Za-z0-9]/', $pass))
				{
					echo "<script type='text/javascript'>alert('Password should only have letters and digits');</script>";
					echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
				}
				else $passerr="success";
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
					$sql="INSERT INTO participants (USERNAME, PASSWORD) VALUES ('$user', '$pass')";
					$_SESSION['user']=$user;
					$retval=mysql_query($sql, $conn);
					if(!$retval)
					{
						echo "<script type='text/javascript'>alert('Email already exists');</script>";
						echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
					}
					else 
					{
						echo "<script type='text/javascript'>alert('You have been registered');</script>";
						echo "<script type='text/javascript'>location.assign('quiz1.php');</script>";
					}
				}
				mysql_close($conn);
			}	
		}
	}
?>
</html>
