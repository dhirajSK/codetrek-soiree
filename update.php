<?php include 'connect.php';

$nm=$_GET['name'];
$em=$_GET['em'];
if($nm=="accept")
{
	$qry=mysqli_query($conn,"UPDATE requests SET status = '1' WHERE email = '".$em."'");
	header("Location:/admin.php");
}	
else if($nm=="reject")
{
	$qry=mysqli_query($conn,"UPDATE requests SET status = '0' WHERE email = '".$em."'");
	header("Location:/admin.php");
}
?>
