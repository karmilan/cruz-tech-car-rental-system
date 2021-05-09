<?php include('session.php'); ?>

<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM driver";

if( isset($_GET['search']) ){
    $drivername = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM driver WHERE drivername ='$drivername'";
}

$result = $dbconn->query($sql);


?>

<div class="content-main">
	<div class="container">
		<h2>Driver Details</h2>

		<div class="input-group">
  <div class="form-outline">

<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search" class="form-control">
</div>


<button type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
<i class="fa fa-search"></i>
</button> 

&nbsp;&nbsp;&nbsp;&nbsp;
<a href="view-driver.php" class="btn btn-outline-success">View All</a>

</form>
</div>
<br>

<div class="tbl-style">
		
<table class="table table-hover">
	<thead>
		<tr>
		<th>Driver ID</th>
		<th>Driver Name</th>
		<th>Gender</th>
		<th>age</th>
        <th>Address</th>
        <th>Contact No</th>
        <th>License No</th>
		<th>Date of Birth</th>
        <th>Reference Name</th>
        <th>Reference No</th>
        <th>Driver Image</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			
				while ($row = $result->fetch_assoc())  {
		?>

					<tr>
					<td><?php echo $row['driverid']; ?></td>
					<td><?php echo $row['drivername']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['contactno']; ?></td>
                    <td><?php echo $row['licenseno']; ?></td>
					<td><?php echo $row['dob']; ?></td>
					<td><?php echo $row['referencename']; ?></td>
                    <td><?php echo $row['referenceno']; ?></td>
                    <td><?php echo $row['driverimage']; ?></td>
                    
					
					<td><a class="btn btn-info"  href="update-driver.php?driverid=<?php echo $row['driverid']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
				</td>
					
				<td>
					<a class="btn btn-danger" href="delete-driver.php?driverid=<?php echo $row['driverid']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
					</tr>	
					
		<?php		
			}
		?>
	        	
	</tbody>
</table>
	</div>
	</div>
	</div>
	<?php include 'includes/footer.php';?>

</body>
</html>
