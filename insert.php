<?php
include 'connect.php';
$txtName01=$_POST['txtName1'];
$txtPass01=$_POST['txtPass1'];
$txtEmail01=$_POST['txtEmail1'];

if(isset($_POST['done'])){
	$query="INSERT INTO tbl_bt (name,email,password) VALUES ('$txtName01','$txtEmail01','$txtPass01')";
$result=mysqli_query($conn,$query);
header("location: insert.php");

}
?>

<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <head>
  <body>
  	<div class="row">
<div class="col-lg-4 m-auto">
<form method="POST">
	
			<h1> Insert</h1>
		
		<div class="form-control">
		<label>Username</label>
		<input type="text" name="txtName1" class="form-control"><br>
		</div>
		<div class="form-control">
		<label>Email</label>
		<input type="text" name="txtEmail1" class="form-control"><br>
		</div>
		<div class="form-control">
		<label>Password</label>
		<input type="password" name="txtPass1" class="form-control"><br>
	</div>
		<button class="btn btn-danger" type="submit" name="done">Submit</button>

	</form>
</div>
</div>
  </body>
  </html>