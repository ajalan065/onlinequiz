<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$user=$_POST['email'];
		$pass=$_POST['password'];
		$cpass=$_POST['cnfpassword'];
		$f=-1;
		$conn=mysql_connect("localhost", "root", "mukti123!");
		if(empty($pass) || empty($user) || empty($cpass))
		{
			if(empty($user))
			{
				echo "<script type='text/javascript'>alert('Enter email id');</script>";
				echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
			}
			else if(empty($pass))
			{
				echo "<script type='text/javascript'>alert('Give the password you want to use to access');</script>";
				echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Please confirm your password');</script>";
				echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
			}
		}
		
		else
		{
			if(!$conn)
			{
				echo "<script type='text/javascript'>alert('Server connection failed. Try again.');</script>";
				echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
			}
			else
			{
				$database="onlinequiz";
				$sqli="SELECT USERNAME FROM participants";
				mysql_select_db($database, $conn);
				$ret=mysql_query($sqli, $conn);
				if(!$ret)
				{
					echo "<script type='text/javascript'>alert('Server connection failed. Try again.');</script>";
					echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
				}
				else
				{
					while($row=mysql_fetch_array($ret, MYSQL_ASSOC))
					{
						if($row['USERNAME']==$user)
						{
							$f=1;
							break;
						}
						else $f=0;
					}
						if($f==1)
						{
							$sql="SELECT PASSWORD FROM participants WHERE USERNAME='$user'";
								if(preg_match('/[^A-Za-z0-9]/', $pass))
								{
									echo "<script type='text/javascript'>alert('Password should only have letters and digits');</script>";
									echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
								}
								
								else
								{
									if($pass!=$cpass)
									{
										echo "<script type='text/javascript'>alert('The two passwords does not match');</script>";
										echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
									}
									else
									{
										$usql="UPDATE participants SET PASSWORD='$cpass' WHERE USERNAME='$user'";
										$retval=mysql_query($usql, $conn);
										if(!$retval)
										{
											echo "<script type='text/javascript'>alert('Couldnot update. Retry.');</script>";
											echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
										}
										else 
										{
											echo "<script type='text/javascript'>alert('Password changed successfully');</script>";
											echo "<script type='text/javascript'>location.assign('welcome.html');</script>";
										}
									}
								}
						}
						if($f==0)
						{
							echo "<script type='text/javascript'>alert('Email ID not found. Please check your email id');</script>";
							echo "<script type='text/javascript'>location.assign('pswrdchnge.html');</script>";
						}
				}
			}
		}
		mysql_close($conn);
	}
?>
