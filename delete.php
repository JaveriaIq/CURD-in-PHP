<?php
include 'connect.php';

$id=$_GET['id'];

$query= "DELETE FROM tbl_bt WHERE id='$id'";

mysqli_query($conn,$query);
header("location:table.php");

?>