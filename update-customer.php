<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>

<?php 
include "includes/dbconfig.php";

	if (isset($_POST['update'])) {
		$cust_id = $_POST['cust_id'];
		$fullname = $_POST['fullname'];
        $telephone_no = $_POST['telephone_no'];
        $mobile_no = $_POST['mobile_no'];
        $street_no = $_POST['street_no'];
        $passport_no = $_POST['passport_no'];
        $driving_license_no = $_POST['driving_license_no'];        
        $nationality = $_POST['nationality'];     
        $reference_name=$_POST['reference_name'];
        $job_details=$_POST['job_details'];
        $address=$_POST['address'];
        $location=$_POST['location'];
        $passport_expiry_date=$_POST['passport_expiry_date'];
        $driving_license_expiry_date=$_POST['driving_license_expiry_date'];
        $how_did_know=$_POST['how_did_know'];
        $reference_no=$_POST['reference_no'];
        $premium_customer=$_POST['premium_customer'];
		

		$sql = "UPDATE `customer` SET `fullname`='$fullname', `telephone_no`='$telephone_no', `mobile_no`='$mobile_no', `street_no`='$street_no', `passport_no`='$passport_no', `driving_license_no`='$driving_license_no', `nationality`='$nationality', `reference_name`='$reference_name', `job_details`='$job_details', `address`='$address', `location`='$location', `passport_expiry_date`='$passport_expiry_date', `driving_license_expiry_date`='$driving_license_expiry_date', `how_did_know`='$how_did_know', `reference_no`='$reference_no', `premium_customer`='$premium_customer' WHERE `cust_id`='$cust_id'";

		$result = $dbconn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $dbconn->error;
		}
	}


if (isset($_GET['cust_id'])) {
	$cust_id = $_GET['cust_id'];

	$sql = "SELECT * FROM `customer` WHERE `cust_id`='$cust_id'";

	$result = $dbconn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			
            $fullname = $row['fullname'];
            $telephone_no = $row['telephone_no'];
            $mobile_no = $row['mobile_no'];
            $street_no = $row['street_no'];
            $passport_no = $row['passport_no'];
            $driving_license_no = $row['driving_license_no'];        
            $nationality = $row['nationality'];     
            $reference_name=$row['reference_name'];
            $job_details=$row['job_details'];
            $address=$row['address'];
            $location=$row['location'];
            $passport_expiry_date=$row['passport_expiry_date'];
            $driving_license_expiry_date=$row['driving_license_expiry_date'];
            $how_did_know=$row['how_did_know'];
            $reference_no=$row['reference_no'];
            $premium_customer=$row['premium_customer'];
            $cust_id = $row['cust_id'];
		}

	?>




<div class="content-main">
    <h3>Update Customer</h3>

<div class="container container-stl">

<form action="" method="POST">

<div class="row">
<div class="col">

<br>

			<label for="" class="form-label">Full Name</label> <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>"><br>


		    <input type="hidden" name="cust_id" class="form-control" value="<?php echo $cust_id; ?>">
		    <br>
		    
			<label for="" class="form-label">Telephone No</label>
<input type="text" class="form-control" name="telephone_no" value="<?php echo $telephone_no; ?>"><br>

<label for="" class="form-label">Mobile No</label>
<input type="text" class="form-control" name="mobile_no" value="<?php echo $mobile_no; ?>"><br>

<label for="" class="form-label">Street No</label>
<input type="text" class="form-control" name="street_no" value="<?php echo $street_no; ?>"><br>

<label for="" class="form-label">Passport No</label>
<input type="text" class="form-control" name="passport_no" value="<?php echo $passport_no; ?>"><br>

<label for="" class="form-label">Driving License No</label>
<input type="text" class="form-control" name="driving_license_no" value="<?php echo $driving_license_no; ?>"><br>

<label for="" class="form-label">Nationality</label>
<input type="text" class="form-control" name="nationality" value="<?php echo $nationality; ?>"><br>

<label for="" class="form-label">Referance Name</label>
<input type="text" class="form-control" name="reference_name" value="<?php echo $reference_name; ?>"><br>

<label for="" class="form-label">Job Details</label>
<input type="text" class="form-control" name="job_details" value="<?php echo $job_details; ?>"><br>

</div>

<div class="col">

<br>
<label for="" class="form-label">Address</label>
<input type="text" class="form-control tfield" name="address" value="<?php echo $address; ?>"><br>

<label for="" class="form-label">Location</label>
<input type="text" class="form-control" name="location" value="<?php echo $location; ?>"><br>

<label for="" class="form-label">Passport Expiry Date</label>
<input type="date" class="form-control" name="passport_expiry_date" value="<?php echo $passport_expiry_date; ?>"><br>

<label for="" class="form-label">Driving License Expiry Date</label>
<input type="date" class="form-control" name="driving_license_expiry_date" value="<?php echo $driving_license_expiry_date; ?>"><br>

<label for="" class="form-label">How did you know about us?</label>
<input type="text" class="form-control tfield" name="how_did_know" value="<?php echo $how_did_know; ?>"><br>

<label for="" class="form-label">Reference No</label>
<input type="text" class="form-control" name="reference_no" value="<?php echo $reference_no; ?>"><br>

<label for="" class="form-label">Premium Customer</label><br>
<input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="premium_customer" value="yes" <?php if($premium_customer == 'yes'){ echo "checked";} ?>>Yes
<input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="premium_customer" value="no" <?php if($premium_customer == 'no'){ echo "checked";} ?>>No
<br><br>
	
		    <br><br>
		    <input type="submit" value="Update" name="update" class="btn btn-info">
			<a type="button" class="btn btn-secondary" href="viewrentdata.php">Vew All Rental Details >></a>
			<br><br>
		  </fieldset>
		</form>

</div>
</div>

<div class="col-8">
<div class="container container-stl">
<?php include 'availablecar.php';?>

</div>
</div>

</div>

		

		<!-- </body>
		</html> -->




	<?php
	} else{
		header('Location: viewdata.php');
	}

}
?>
<?php include 'includes/footer.php';?>
