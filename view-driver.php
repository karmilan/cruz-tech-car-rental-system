<?php include('session.php'); ?>

<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM driver";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Driver Details</h2>
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
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
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
                    
					
					<td><a class="btn btn-info"  href="update-driver.php?driverid=<?php echo $row['driverid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete-driver.php?driverid=<?php echo $row['driverid']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
	<?php include 'includes/footer.php';?>

</body>
</html>
