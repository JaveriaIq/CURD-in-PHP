<?php

$conn=mysqli_connect("localhost","root","","new_bt");

  $txtName= $_POST['txtName1'];
  $txtPass= $_POST['txtPass1'];
  $txtEmail=$_POST['txtEmail1'];

  $query="INSERT INTO tbl_bt (name,email,password) VALUES ('$txtName', '$txtEmail',' $txtPass')";
 echo "$query";
 if(mysqli_query($conn,$query))
// $result= mysqli_query($conn,$query);
// if($res=mysqli_fetch_array($result))
	{
		echo "<script> alert(\"Inserted\");</script>";
	}
	
	else 
		{
			echo "<script>alert(\" not inserted\");</script>";
		}


?>