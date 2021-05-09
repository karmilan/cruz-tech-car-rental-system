<?php include 'includes/header.php'; ?>
<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM customer";

if( isset($_GET['search']) ){
    $driving_license_no = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM customer WHERE driving_license_no ='$driving_license_no'";
}


$result = $dbconn->query($sql);


?>


	<div class="container">
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
<a href="view-licenseno.php" class="btn btn-outline-success">View All</a>

</form>
</div>
<br>

		<div class="tbl-style">

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
		</div>
	<?php include 'includes/footer.php';?>

</body>
</html>
