<?php
$con=mysqli_connect('localhost','root','','details');
$errorcount= 0;
$name="";
$email="";
$phone=0;
$count=0;
if(isset($_POST['register']))
	{	//session_start();
		
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$phone=mysqli_real_escape_string($con,$_POST['number']);
		
		if(empty($name)|| empty($email)||empty($phone))
		{
			echo "<h2>All blocks have to be filled<h2>";
			$errorcount=1;
		}
		if($errorcount==0)
		{	
	
			$count++;
			$syn="insert into detail(name,phone,email) values('$name','$phone','$email')";
			mysqli_query($con,$syn);
		//	$_SESSION['username']=$username;
		//	$_SESSION['welcome']="welcome";
			//header('location: insert.php');
		
		}
	}
?>