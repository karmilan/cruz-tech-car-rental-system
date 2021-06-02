<?php include('session.php'); ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php 
include "includes/dbconfig.php";

	if (isset($_POST['submit'])) {
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
		

		$sql = "INSERT INTO `customer`(`fullname`, `telephone_no`, `mobile_no`, `street_no`, `passport_no`, `driving_license_no`, `nationality`, `reference_name`, `job_details`, `address`, `location`, `passport_expiry_date`, `driving_license_expiry_date`, `how_did_know`, `reference_no`, `premium_customer`) VALUES ('$fullname','$telephone_no','$mobile_no','$street_no','$passport_no', '$driving_license_no', '$nationality', '$reference_name','$job_details','$address','$location','$passport_expiry_date', '$driving_license_expiry_date','$how_did_know','$reference_no','$premium_customer')";


		$result = $dbconn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}
    else{
			echo "Error insertttt:". $sql . "<br>". $dbconn->error;
		}
  
		
    mysqli_close($dbconn);

	}
 
?>

<div class="content-main">
    <h3>add Customer</h3>

<div class="container container-stl">

<form action="" method="POST">

<div class="row">
<div class="col">

<br>
<label for="" class="form-label">Full Name</label>
<input type="text" class="form-control" name="fullname"><br>

<label for="" class="form-label">Telephone No</label>
<input type="text" class="form-control" name="telephone_no" pattern="^\d{10}$"><br>

<label for="" class="form-label">Mobile No</label>
<input type="text" class="form-control" name="mobile_no" pattern="^\d{10}$"><br>

<label for="" class="form-label">Street No</label>
<input type="text" class="form-control" name="street_no"><br>

<label for="" class="form-label">Passport No</label>
<input type="text" class="form-control" name="passport_no"><br>

<label for="" class="form-label">Driving License No</label>
<input type="text" class="form-control" name="driving_license_no"><br>

<label for="" class="form-label">Nationality</label>
<input type="text" class="form-control" name="nationality"><br>

<label for="" class="form-label">Referance Name</label>
<input type="text" class="form-control" name="reference_name"><br>

<label for="" class="form-label">Job Details</label>
<input type="text" class="form-control" name="job_details"><br>

</div>

<div class="col">

<br>
<label for="" class="form-label">Address</label>
<input type="text" class="form-control tfield" name="address"><br>

<label for="" class="form-label">Location</label>
<input type="text" class="form-control" name="location"><br>

<label for="" class="form-label">Passport Expiry Date</label>
<input type="date" class="form-control" name="passport_expiry_date"><br>

<label for="" class="form-label">Driving License Expiry Date</label>
<input type="date" class="form-control" name="driving_license_expiry_date"><br>

<label for="" class="form-label">How did you know about us?</label>
<input type="text" class="form-control tfield" name="how_did_know"><br>

<label for="" class="form-label">Reference No</label>
<input type="text" class="form-control" name="reference_no"><br>

<label for="" class="form-label">Premium Customer</label><br>
<input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="premium_customer" value="yes">Yes
<input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="premium_customer" value="no">No
<br><br>
<input type="submit" name="submit" value="Add" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a type="button" class="btn btn-secondary" href="view-customer.php">Vew All Customer Details >></a>

</div>
</div>

</form>
</div>

</div>

<?php include 'includes/footer.php'; ?>