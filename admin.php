<?php 
      include('connect.php');
      session_start();
// $conn->close();
if(!isset($_SESSION['is_user_logged_in']) || !$_SESSION['is_user_logged_in']){
   echo "<h1>Not logged in</h1>";
   echo "<h1><a href='login.php'>login</a></h1>";
   die();
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>codetrek</title>
  
<link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
<link  href="css/style.css" rel="stylesheet"> 
  
</head>

<body>
<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Soiree</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="logout.php">logout</a></li>
    </ul>
  </div>
</nav>
<hr>

<div class="container-fluid table-responsive">
<?php echo "<h3> Hello! ".ucwords($_SESSION['usern'])."</h3>" ;?>
<br> 
<table class="table" >
  <thead style="text-align:center">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>City</th>
      <th>Gender</th>
      <th>Status</th>
    </tr>
    </thead>   
  <tbody>
        <?php
             $qry=mysqli_query($conn,"SELECT * FROM requests");
              while ($row=mysqli_fetch_array($qry))
    {
    ?>
        <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td>
            <?php
            if($row['status']==1)
            {
              ?>
            <div class="btn btn-success">Accepted</div>
            <?php 
            } 
            else if($row['status']==0)
            {
            ?>

            <div class="btn btn-primary">Rejected</div>
            <?php
            }
            else
            {
              $pathUrl="update.php?em=".$row['email'];       
              ?>
            <a href="<?php echo $pathUrl."&name=accept" ?>"><div class="btn btn-success" name="Accept">Accept</div></a>
            <a href="<?php echo $pathUrl."&name=reject" ?>"><div class="btn btn-primary" name="Reject">Reject</div></a>
            <?php
            }
            ?>
        </td>
        </tr>
        <?php 
        }
        $conn->close();
         ?>
  </tbody>
</table>
<hr>
</div>


<?php include('footer.php') ?>
