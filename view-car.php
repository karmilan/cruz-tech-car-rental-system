<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM car";

if( isset($_GET['search']) ){
    $carname = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM car WHERE carname ='$carname'";
}

$result = $dbconn->query($sql);


?>

<div class="content-main">
	<div class="container">
		<h2>Car Details</h2>

        <div class="input-group">
  <div class="form-outline">

<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search" class="form-control">
</div>


<button type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
<i class="fa fa-search"></i>
</button> 

&nbsp;&nbsp;&nbsp;&nbsp;
<a href="view-car.php" class="btn btn-outline-success">View All</a>

</form>
</div>
<br>

<div style="overflow-x:auto; overflow-y:auto;">

<table class="table table-hover">
	<thead>
		<tr>
		<th>Car ID</th>
		<th>Category</th>
		<th>Brand</th>
		<th>Model</th>
        <th>Car Name</th>
        <th>Car Type</th>
        <th>Seating Capacity</th>
		<th>Plate No</th>
        <th>Fuel Type</th>
        <th>Fuel Capacity</th>
        <th>Manufacture Year</th>
        <th>Colour</th>
        <th>Hourly Charge</th>
        <th>Daily Charge</th>
        <th>Weekly Charge</th>
        <th>Monthly Charge</th>
        <th>Insurance Charge</th>
        <th>Details</th>
        <th>Branch</th>
        <th>Image</th>
        <th>Availability</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['carid']; ?></td>
					<td><?php echo $row['category']; ?></td>
					<td><?php echo $row['brand']; ?></td>
					<td><?php echo $row['model']; ?></td>
                    <td><?php echo $row['carname']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['seatingcapacity']; ?></td>
					<td><?php echo $row['plateno']; ?></td>
					<td><?php echo $row['fueltype']; ?></td>
                    <td><?php echo $row['fuelcapacity']; ?></td>
                    <td><?php echo $row['manufactureyr']; ?></td>
                    <td><?php echo $row['colour']; ?></td>
                    <td><?php echo $row['hourlycharge']; ?></td>
                    <td><?php echo $row['dailycharge']; ?></td>
                    <td><?php echo $row['weeklycharge']; ?></td>
                    <td><?php echo $row['monthlycharge']; ?></td>
                    <td><?php echo $row['insurancecharge']; ?></td>
                    <td><?php echo $row['details']; ?></td>
                    <td><?php echo $row['branch']; ?></td>
                    <td><img src="car_images/<?php echo $row['image']; ?>"  class="preview"></td>
                    <td><?php echo $row['available']; ?></td>
					
					<td><a class="btn btn-info"  href="update-car.php?carid=<?php echo $row['carid']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a class="btn btn-danger" href="delete-car.php?carid=<?php echo $row['carid']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
