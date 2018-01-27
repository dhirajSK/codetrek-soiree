
<?php 
include('header.php');
include('connect.php');

if(!isset( $_POST['name'])||!isset( $_POST['phn-no'])||!isset( $_POST['email'])||!isset( $_POST['city'])||!isset( $_POST['gender'])){
	echo "<h1> Register at <a href='reg.php'>Soiree Invitation</a></h1>";
	die();
}


$uname= $_POST['name'];
$uphn = $_POST['phn-no'];
$uemail= $_POST['email'];
$ucity= $_POST['city'];
$ugen = $_POST['gender'];
$ustatus= 3;
$flag=0;

$msg="Thank You! your request has been sucessfully saved.<br>
  The host will review and update you on your request.";
$sql1="SELECT * FROM requests";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
    if($row['email']==$uemail){
		$flag=1;
      }
  }
} 
if($flag==1){
	$msg="user already exist";
}



$sql="INSERT INTO requests (name, email, mobile, city, gender, status) VALUES ('$uname', '$uemail','$uphn',     '$ucity', '$ugen', '$ustatus')";
// mysqli_query($conn,$sql);



$conn->query($sql);

?>

<div class="thanks">
  <h2>
  <?php echo "$msg";?>
  </h2>
</div>
 
</body>

<?php include('footer.php') ?>
