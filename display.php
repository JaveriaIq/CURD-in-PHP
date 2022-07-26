<?php
include 'connect.php';
$txtName1=$_POST['txtName1'];
$txtPass1=$_POST['txtPass1'];
$txtEmail1=$_POST['txtEmail1'];

if(isset($_POST['done'])){
	$query="SELECT * from tbl_bt";
$result=mysqli_query($conn,$query);





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
</head>
<body>
	<div class="container">
		<h2> Display</h2><br>
<div class=" col-lg-12">
	
	<table class="table table-striped table-hover table-border">
		<tr>
			<th> ID</th>
			<th> NAME</th>
			<th> EMAIL</th>
			<th> PASSWORD</th>
			<th> DELETE</th>
			<th> UPDATE</th>
		</tr>

<?php
		include 'connect.php';
		$query="SELECT * from tbl_bt";
		$result=mysqli_query($conn,$query);
		while ($res= mysqli_fetch_array($result)) {

?>


		<tr>
			<td> <?php echo $res['id'];?></td>
			<td> <?php echo $res['name'];?></td>
			<td> <?php echo $res['email'];?></td>
			<td> <?php echo $res['password'];?></td>
			<td> <button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">DELETE</a></button></td>
			<td> <button class="btn btn-danger"><a href="update.php?id=<?php echo $res['id'];?>" class="text-white">UPDATE</a></button></td>
		</tr>
<?php

}
?>

	</table>
</div>
</div>
</body>
</html>
