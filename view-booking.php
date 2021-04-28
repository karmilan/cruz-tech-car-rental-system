<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php';?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM booking";

$result = $dbconn->query($sql);


?>

<div class="content-main">
	<div class="container">
		<h2>Booking Details</h2>
<table class="table table-hover">
	<thead>
		<tr>
        <th>Booking ID</th>
        <th>Car Image</th>
		<th>Car Name</th>
		<th>Car Category</th>
		<th>Car Brand</th>
		<th>Car Model</th>
        <th>Seating Capacity</th>
        <th>Car Daily Charge</th>
        <th>Customer License No</th>
        <th>Booking Days</th>
        <th>Amount</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['bookingid']; ?></td>
					<td><?php echo $row['car_image']; ?></td>
					<td><?php echo $row['car_name']; ?></td>
					<td><?php echo $row['car_category']; ?></td>
                    <td><?php echo $row['car_brand']; ?></td>
                    <td><?php echo $row['car_model']; ?></td>
					<td><?php echo $row['car_seatingcapacity']; ?></td>
					
					<td><?php echo $row['car_dailycharge']; ?></td>
					<td><?php echo $row['cust_drivinglicenseno']; ?></td>
                    <td><?php echo $row['bookingdays']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
					
					<td><a class="btn btn-info"  href="update-booking.php?bookingid=<?php echo $row['bookingid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete-booking.php?bookingid=<?php echo $row['bookingid']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
</div>
	<?php include 'includes/footer.php';?>

</body>
</html>
