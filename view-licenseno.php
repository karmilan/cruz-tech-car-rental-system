<?php include 'includes/header.php'; ?>
<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM customer";

$result = $dbconn->query($sql);


?>


	<div class="container">
		<h2>Customer Details</h2>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Full Name</th>
		
        <th>Driving License No</th>
        
        <th>Driving License Expiry Date</th>
        
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['fullname']; ?></td>
					
                    <td><?php echo $row['driving_license_no']; ?></td>
                   
                    <td><?php echo $row['driving_license_expiry_date']; ?></td>
               
					
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
