<?php

$conn=mysqli_connect("localhost","root","","new_bt");
$txtName=$_POST['txtName1'];
$txtPass=$_POST['txtPass1'];
if ($txtName!=""&&$txtPass!="") 
{

$query="SELECT * FROM tbl_bt WHERE name='$txtName' AND password ='$txtPass'";
$result= mysqli_query($conn,$query);
if(mysqli_fetch_array($result))
	{
		echo "<script> alert(\"login successfully\");</script>";
	}
	
	else 
		{
			echo "<script>alert(\"login failed\");</script>";
		}

}

	
?>