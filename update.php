<?php
include 'connect.php';

if(isset($_POST['done'])){

$id=$_GET['id'];
$txtName1=$_POST['txtName1'];
$txtPass1=$_POST['txtPass1'];
$txtEmail1=$_POST['txtEmail1'];

	$query="UPDATE tbl_bt SET id='$id',name='$txtName1',email='$txtEmail1',password='$txtPass1' WHERE id='$id'";
	$result=mysqli_query($conn,$query);
echo $query;

header('location: table.php');

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
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form method="POST">
						<h2>Update</h2>
			
				
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="txtName1" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="txtPass1" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="txtEmail1" class="form-control">
					</div>
					
					<div class="form-group">
						<button class="btn btn-danger" type="submit" name="done">Submit</button>
					</div>
			
			</div>
		</div>
		
				</form>
</div>
  </body>
  </html>