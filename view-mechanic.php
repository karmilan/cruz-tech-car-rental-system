<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>
<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM mechanic";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Mechanic Details</h2>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Mechanic ID</th>
		<th>Company Name</th>
		<th>Mechanic Name</th>
		<th>Contact No</th>
        <th>Company Address</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['mechanicid']; ?></td>
					<td><?php echo $row['companyname']; ?></td>
					<td><?php echo $row['mechanicname']; ?></td>
					<td><?php echo $row['contactno']; ?></td>
                    <td><?php echo $row['companyaddress']; ?></td>
					
					<td><a class="btn btn-info"  href="update-mechanic.php?mechanicid=<?php echo $row['mechanicid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete-mechanic.php?mechanicid=<?php echo $row['mechanicid']; ?>">Delete</a></td>
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
