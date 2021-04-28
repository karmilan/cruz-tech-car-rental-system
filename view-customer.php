<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>

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
		<th>Telephone No</th>
		<th>Mobile No</th>
		<th>Street No</th>
        <th>Passport No</th>
        <th>Driving License No</th>
        <th>Nationality</th>
		<th>Reference Name</th>
        <th>Job Details</th>
        <th>Address</th>
        <th>Location</th>
        <th>Passport Expiry Date</th>
        <th>Driving License Expiry Date</th>
        <th>How did you know about us?</th>
        <th>Reference No</th>
        <th>Premium Customer</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['fullname']; ?></td>
					<td><?php echo $row['telephone_no']; ?></td>
					<td><?php echo $row['mobile_no']; ?></td>
					<td><?php echo $row['street_no']; ?></td>
                    <td><?php echo $row['passport_no']; ?></td>
                    <td><?php echo $row['driving_license_no']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
					<td><?php echo $row['reference_name']; ?></td>
					<td><?php echo $row['job_details']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['passport_expiry_date']; ?></td>
                    <td><?php echo $row['driving_license_expiry_date']; ?></td>
                    <td><?php echo $row['how_did_know']; ?></td>
                    <td><?php echo $row['reference_no']; ?></td>
                    <td><?php echo $row['premium_customer']; ?></td>
					
					<td><a class="btn btn-info"  href="update-customer.php?cust_id=<?php echo $row['cust_id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete-customer.php?cust_id=<?php echo $row['cust_id']; ?>">Delete</a></td>
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
