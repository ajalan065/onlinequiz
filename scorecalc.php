<?php
	session_start();
	$user=$_SESSION['user'];
	$q=$_SESSION['q'];
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$q1=$_POST['ans'];
		$conn=mysql_connect("localhost", "root","mukti123!");
		mysql_select_db("onlinequiz", $conn);
		$sql=mysql_query("SELECT SCORE FROM participants WHERE USERNAME='$user'");
		$sql2=mysql_fetch_object($sql);
		$sql3=$sql2->SCORE;
		$sql4=mysql_query("SELECT * FROM quesans WHERE qno='$q'");
		$sql5=mysql_fetch_array($sql4);
		$sql6=$sql5['answer'];
		if($q>='1' && $q<='35')
		{
			if($sql6==$q1)	
			{
				$f=1;
				$sql3+=2;
			}
			else 
			{
				$f=0;
				$sql3-=1;
			}
		}
		if($q>='36' && $q<='55')
		{
			if($sql6==$q1)	
			{
				$f=1;
				$sql3+=3;	
			}
			else
			{
				$f=0;
				$sql3-=1;
			}
		}
		if($q>='56' && $q<='70')
		{
			if($sql6==$q1)	
			{
				$f=1;
				$sql3+=5;
			}
			else
			{
				$f=0;
				$sql3-=0;
			}
		}
	}
	$_SESSION['score']=$sql3;
	mysql_query("UPDATE participants SET SCORE='$sql3' WHERE USERNAME='$user'");
	mysql_close($conn);
	echo "<script type='text/javascript'> window.location.assign('quiz1.php');</script>";
?>
