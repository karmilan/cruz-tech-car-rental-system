<?php include('session.php'); ?>

<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM insurance";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Insurance Details</h2>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Insurance ID</th>
		<th>Insurance Company Name</th>
		<th>Address</th>
		<th>Contact Person Name</th>
        <th>Contact No</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['insuranceid']; ?></td>
					<td><?php echo $row['insurancecompanyname']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['contactpersonname']; ?></td>
                    <td><?php echo $row['contactno']; ?></td>
					
					<td><a class="btn btn-info"  href="update-insurance.php?insuranceid=<?php echo $row['insuranceid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete-insurance.php?insuranceid=<?php echo $row['insuranceid']; ?>">Delete</a></td>
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
