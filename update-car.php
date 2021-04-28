<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['update'])) {
	$carid = $_POST['carid'];
	$category = $_POST['category'];
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$carname = $_POST['carname'];
	$type = $_POST['type'];
	$seatingcapacity = $_POST['seatingcapacity'];
	$plateno = $_POST['plateno'];
	$fueltype = $_POST['fueltype'];
	$fuelcapacity = $_POST['fuelcapacity'];
	$manufactureyr = $_POST['manufactureyr'];
	$colour = $_POST['colour'];
	$hourlycharge = $_POST['hourlycharge'];
	$dailycharge = $_POST['dailycharge'];
	$weeklycharge = $_POST['weeklycharge'];
	$monthlycharge = $_POST['monthlycharge'];
	$insurancecharge = $_POST['insurancecharge'];
	$details = $_POST['details'];
	$branch = $_POST['branch'];
	$image = $_POST['image'];
	$available = $_POST['available'];


	$sql = "UPDATE `car` SET `category`='$category', `brand`='$brand', `model`='$model', `carname`='$carname', `type`='$type', `seatingcapacity`='$seatingcapacity', `plateno`='$plateno', `fueltype`='$fueltype', `fuelcapacity`='$fuelcapacity', `manufactureyr`='$manufactureyr', `colour`='$colour', `hourlycharge`='$hourlycharge', `dailycharge`='$dailycharge', `weeklycharge`='$weeklycharge', `monthlycharge`='$monthlycharge', `insurancecharge`='$insurancecharge', `details`='$details', `branch`='$branch', `image`='$image', `available`='$available' WHERE `carid`='$carid'";

	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo '<script>alert("Car Updated Successfully")</script>';
	} else {
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}


if (isset($_GET['carid'])) {
	$carid = $_GET['carid'];

	$sql = "SELECT * FROM `car` WHERE `carid`='$carid'";

	$result = $dbconn->query($sql);

	if ($result->num_rows > 0) {

		while ($row = $result->fetch_assoc()) {

			$category = $row['category'];
			$brand = $row['brand'];
			$model = $row['model'];
			$carname = $row['carname'];
			$type = $row['type'];
			$seatingcapacity = $row['seatingcapacity'];
			$plateno = $row['plateno'];
			$fueltype = $row['fueltype'];
			$fuelcapacity = $row['fuelcapacity'];
			$manufactureyr = $row['manufactureyr'];
			$colour = $row['colour'];
			$hourlycharge = $row['hourlycharge'];
			$dailycharge = $row['dailycharge'];
			$weeklycharge = $row['weeklycharge'];
			$monthlycharge = $row['monthlycharge'];
			$insurancecharge = $row['insurancecharge'];
			$details = $row['details'];
			$branch = $row['branch'];
			$image = $row['image'];
			$available = $row['available'];
			$carid = $row['carid'];
		}

?>




		<div class="content-main">
			<h3>Update Car</h3>

			<div class="container container-stl">

				<form action="" method="POST">

					<div class="row">
						<div class="col">

							<br>

							<input type="hidden" name="carid" class="form-control" value="<?php echo $carid; ?>">
							<br>

							<label for="" class="form-label">Category</label> <input type="text" class="form-control" name="category" value="<?php echo $category; ?>"><br>

							<label for="" class="form-label">Brand</label>
							<input type="text" class="form-control" name="brand" value="<?php echo $brand; ?>"><br>

							<label for="" class="form-label">Model</label>
							<input type="text" class="form-control" name="model" value="<?php echo $model; ?>"><br>

							<label for="" class="form-label">Car Name</label>
							<input type="text" class="form-control" name="carname" value="<?php echo $carname; ?>"><br>

							<label for="" class="form-label">Car Type</label>
							<select class="form-control" name="type">
							<option value="Sedan" <?php if($type == 'Sedan'){ echo "selected";} ?>>Sedan</option>
                  <option value="SUV" <?php if($type == 'SUV'){ echo "selected";} ?>>SUV</option>
                  <option value="MPV" <?php if($type == 'MPV'){ echo "selected";} ?>>MPV</option>
                  <option value="Hatchback" <?php if($type == 'Hatchback'){ echo "selected";} ?>>Hatchback</option>
                  <option value="Crossover" <?php if($type == 'Crossover'){ echo "selected";} ?>>Crossover</option>
                  <option value="Coupe" <?php if($type == 'Coupe'){ echo "selected";} ?>>Coupe</option>
                  <option value="Convertible" <?php if($type == 'Convertible'){ echo "selected";} ?>>Convertible</option>
							</select><br>

								<label for="" class="form-label">Seating Capacity</label>
								<input type="text" class="form-control" name="seatingcapacity" value="<?php echo $seatingcapacity; ?>"><br>

								<label for="" class="form-label">Plate No</label>
								<input type="text" class="form-control" name="plateno" value="<?php echo $plateno; ?>"><br>

								<label for="" class="form-label">Fuel Type</label>
								<input type="text" class="form-control" name="fueltype" value="<?php echo $fueltype; ?>"><br>

								<label for="" class="form-label">Fuel Capacity</label>
								<input type="text" class="form-control" name="fuelcapacity" value="<?php echo $fuelcapacity; ?>"><br>

								<label for="" class="form-label">Manufacture Year</label>
								<input type="number" min="1900" max="2099" step="1" value="<?php echo $manufactureyr; ?>" class="form-control" name="manufactureyr" /><br>

						</div>

						<div class="col">

							<br><br>
							<label for="" class="form-label">Colour</label>
							<input type="text" class="form-control " name="colour" value="<?php echo $colour; ?>"><br>

							<label for="" class="form-label">Hourly Charge</label>
							<input type="text" class="form-control" name="hourlycharge" value="<?php echo $hourlycharge; ?>"><br>

							<label for="" class="form-label">Daily Charge</label>
							<input type="text" class="form-control" name="dailycharge" value="<?php echo $dailycharge; ?>"><br>

							<label for="" class="form-label">Weekly Charge</label>
							<input type="text" class="form-control" name="weeklycharge" value="<?php echo $weeklycharge; ?>"><br>

							<label for="" class="form-label">Monthly Charge</label>
							<input type="text" class="form-control " name="monthlycharge" value="<?php echo $monthlycharge; ?>"><br>

							<label for="" class="form-label">Insurance Charge</label>
							<input type="text" class="form-control" name="insurancecharge" value="<?php echo $insurancecharge; ?>"><br>

							<label for="" class="form-label">Details</label>
							<input type="text" class="form-control" name="details" value="<?php echo $details; ?>"><br>

							<label for="" class="form-label">Branch</label>
							<input type="text" class="form-control " name="branch" value="<?php echo $branch; ?>"><br>

							<label for="" class="form-label">Image</label>
							<input type="file" class="form-control" name="image" value="<?php echo $image; ?>"><br>

							<label for="" class="form-label">Availability</label><br>
							<input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="available" value="yes" <?php if ($available == 'yes') {
																																		echo "checked";
																																	} ?>>Yes
							<input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="available" value="no" <?php if ($available == 'no') {
																																		echo "checked";
																																	} ?>>No
							<br><br>

							<br><br>
							<input type="submit" value="Update" name="update" class="btn btn-info">
							<a type="button" class="btn btn-secondary" href="viewrentdata.php">Vew All Rental Details >></a>
							<br><br>
							</fieldset>
				</form>

			</div>
		</div>

		<!-- <div class="col-8">
			<div class="container container-stl">
				<?php include 'availablecar.php'; ?>

			</div>
		</div> -->

		</div>



		<!-- </body>
		</html> -->




<?php
	} else {
		header('Location: view-car.php');
	}
}
?>
<?php include 'includes/footer.php'; ?>