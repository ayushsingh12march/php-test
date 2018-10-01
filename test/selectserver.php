<?php

	$contt=mysqli_connect('localhost','root','','details');
	$query="select * from detail ";
	$quer=mysqli_query($contt,$query);
	$arr=array();
	$count=0;
	$count1=0;
	//$row="";
	while($row=mysqli_fetch_assoc($quer))
	{
		$array[]=$row;
		$count=$count+1;
		
	}
/*	if(isset($_POST['search']))
	{
		$Name=mysqli_real_escape_string($contt,$_POST['name1']);
		$check=mysqli_query($contt,"select * from detail where name='$Name'");
			if(mysqli_num_rows($check)==1)
			{
				echo "hi";
			}
	}
	*/
	//echo $array[0]['name'];


?>