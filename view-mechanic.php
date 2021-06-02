<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- search -->

<?php
include "includes/dbconfig.php";

$sql = "SELECT * FROM mechanic";
if (isset($_GET['search'])) {
	$mechanicname = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));
	$companyname = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));
	$sql = "SELECT * FROM mechanic WHERE mechanicname ='$mechanicname' or companyname ='$companyname'";
}

$result = $dbconn->query($sql);

?>

<div class="content-main">
	<div class="container">

		<h2>Mechanic Details</h2><br>

		<div class="input-group">
			<div class="form-outline">

				<form action="" method="GET">
					<input type="text" placeholder="Type the name here" name="search" class="form-control">
			</div>


			<button type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
				<i class="fa fa-search"></i>
			</button>

			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="view-mechanic.php" class="btn btn-outline-success">View All</a>

			</form>
		</div>
		<br>

		<div class="tbl-style">

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

					while ($row = $result->fetch_assoc()) {
					?>

						<tr>
							<td><?php echo $row['mechanicid']; ?></td>
							<td><?php echo $row['companyname']; ?></td>
							<td><?php echo $row['mechanicname']; ?></td>
							<td><?php echo $row['contactno']; ?></td>
							<td><?php echo $row['companyaddress']; ?></td>

							<td><a class="btn btn-info" href="update-mechanic.php?mechanicid=<?php echo $row['mechanicid']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>

								<!-- <a class="btn btn-danger" href="delete-mechanic.php?mechanicid=<?php echo $row['mechanicid']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
</a> -->

							</td>

							<td><a class="btn btn-danger" href="delete-mechanic.php?mechanicid=<?php echo $row['mechanicid']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
								</a></td>
						</tr>

					<?php
					}
					?>

				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- search end -->





<!-- <?php
		include "includes/dbconfig.php";

		$sql = "SELECT * FROM mechanic";

		$result = $dbconn->query($sql);


		?>


	<div class="container">
		<h2>Mechanic Details</h2>

		<label>Search</label>
<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>

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
	</div> -->
<?php include 'includes/footer.php'; ?>

<!-- </body>
</html> -->