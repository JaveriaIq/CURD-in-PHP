<?php
$conn=mysqli_connect("localhost","root","","test_db");
if(isset($_POST['btnSubmit']))
{
	$txtEmail=$_POST['txtEmail'];
	$txtPass=$_POST['txtPass'];

	$query="SELECT * from tbl_login WHERE email_id='{$txtEmail}' AND password='{$txtPass}'";
	$result= mysqli_query($conn,$query);

	if($res=mysqli_fetch_array($result))
	{
		echo "<script> alert(\"login successfully\");</script>";
	}
	
	else 
		{
			echo "<script>alert(\"login failed\");</script>";
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
			<form action="LOGIN1.php" method="POST">
			<div class="panel panel-success">
				<div class="panel-heading">
					LOGIN
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="txtEmail" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="passwprd" name="txtPass" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="btnSubmit" class="form-control btn btn-dark">
				</div>
			</div>
		</div>
	</div>
</div>
</form>

</body>
</html>