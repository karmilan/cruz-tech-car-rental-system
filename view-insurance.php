<?php include('session.php'); ?>

<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM insurance";

if( isset($_GET['search']) ){
    $insurancecompanyname = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM insurance WHERE insurancecompanyname ='$insurancecompanyname'";
}

$result = $dbconn->query($sql);


?>

<div class="content-main">
	<div class="container">
		<h2>Insurance Details</h2>

		<div class="input-group">
  <div class="form-outline">

<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search" class="form-control">
</div>


<button type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
<i class="fa fa-search"></i>
</button> 

&nbsp;&nbsp;&nbsp;&nbsp;
<a href="view-insurance.php" class="btn btn-outline-success">View All</a>

</form>
</div>
<br>

<div class="tbl-style">

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
			
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['insuranceid']; ?></td>
					<td><?php echo $row['insurancecompanyname']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['contactpersonname']; ?></td>
                    <td><?php echo $row['contactno']; ?></td>
					
					<td><a class="btn btn-info"  href="update-insurance.php?insuranceid=<?php echo $row['insuranceid']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
				</td>
					
				<td>	
				<a class="btn btn-danger" href="delete-insurance.php?insuranceid=<?php echo $row['insuranceid']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
