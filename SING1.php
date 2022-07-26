<?php

$conn=mysqli_connect("localhost","root","","test_db");
if(isset($_POST['btnSubmit']))
{
$txtEmail1=$_POST["txtEmail1"];
$txtPass1=$_POST["txtPass1"];
$txtname1=$_POST["txtname1"];
$query="INSERT INTO tbl_login (name,email_id,password) VALUES ('{$txtname1}','{$txtEmail1}','{$txtPass1}')";
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
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<form action="SING1.php" method="POST">
			<div class="panel panel-success">
				<div class="panel-heading">
					Create Account
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="txtEmail1" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="txtPass1" class="form-control">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="txtname1" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="btnSubmit" class="form-control btn btn-dark">
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</form>

</body>
</html>