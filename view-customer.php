<?php include('session.php'); ?>

<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM customer";

if( isset($_GET['search']) ){
    $fullname = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM customer WHERE fullname ='$fullname'";
}

$result = $dbconn->query($sql);


?>

<div class="content-main">
<h2>Customer Details</h2>

<div class="input-group">
  <div class="form-outline">

<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search" class="form-control">
</div>


<button type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
<i class="fa fa-search"></i>
</button> 

&nbsp;&nbsp;&nbsp;&nbsp;
<a href="view-customer.php" class="btn btn-outline-success">View All</a>

</form>
</div>
<br>

	<div class="container">
		
		<div style="overflow-x:auto; overflow-y:auto;">
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
        
        <th>Reference No</th>
        <th>Premium Customer</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			
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
                    <td><?php echo $row['reference_no']; ?></td>
                    <td><?php echo $row['premium_customer']; ?></td>
					
					<td><a class="btn btn-info"  href="update-customer.php?cust_id=<?php echo $row['cust_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>

<!-- <a class="btn btn-danger" href="delete-customer.php?cust_id=<?php echo $row['cust_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
</a> -->

</td>
					<td><a class="btn btn-danger" href="delete-customer.php?cust_id=<?php echo $row['cust_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
</a></td></td>
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
