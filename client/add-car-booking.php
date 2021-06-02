<?php include 'includes/header.php'; ?>
<?php include "includes/navbar.php"; ?>
<?php include 'includes/dbconfig.php'; ?>


<?php

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


            <div class="container container-stl">

                <form action="" method="POST">

                    <div class="row">

                        </fieldset>
                </form>

            </div>
        </div>


        </div>






<?php
    } else {
        header('Location: view-car.php');
    }
}
?>



<!-- customer -->


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
    $reference_name = $_POST['reference_name'];
    $job_details = $_POST['job_details'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $passport_expiry_date = $_POST['passport_expiry_date'];
    $driving_license_expiry_date = $_POST['driving_license_expiry_date'];
    $how_did_know = $_POST['how_did_know'];
    $reference_no = $_POST['reference_no'];
    $premium_customer = $_POST['premium_customer'];


    $sql = "INSERT INTO `customer`(`fullname`, `telephone_no`, `mobile_no`, `street_no`, `passport_no`, `driving_license_no`, `nationality`, `reference_name`, `job_details`, `address`, `location`, `passport_expiry_date`, `driving_license_expiry_date`, `how_did_know`, `reference_no`, `premium_customer`) VALUES ('$fullname','$telephone_no','$mobile_no','$street_no','$passport_no', '$driving_license_no', '$nationality', '$reference_name','$job_details','$address','$location','$passport_expiry_date', '$driving_license_expiry_date','$how_did_know','$reference_no','$premium_customer')";


    $result = $dbconn->query($sql);

    if ($result == TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error insertttt:" . $sql . "<br>" . $dbconn->error;
    }


    mysqli_close($dbconn);
}

?>


<!-- customer end -->





<?php
include "includes/dbconfig.php";

if (isset($_POST['submit'])) {
    $cust_name = $_POST['cust_name'];
    $bookingtype = $_POST['bookingtype'];
    $car_name = $_POST['car_name'];
    $car_category = $_POST['car_category'];
    $car_brand = $_POST['car_brand'];
    $car_model = $_POST['car_model'];
    $car_seatingcapacity = $_POST['car_seatingcapacity'];

    $cust_drivinglicenseno = $_POST['cust_drivinglicenseno'];
    $car_dailycharge = $_POST['car_dailycharge'];
    $car_monthlycharge = $_POST['car_monthlycharge'];
    $bookingdate = $_POST['bookingdate'];
    $actual_returndate = $_POST['actual_returndate'];
    $car_hourlycharge = $_POST['car_hourlycharge'];
    $status = $_POST['status'];
    $comment = $_POST['comment'];



    $date1 = date_create($bookingdate);
    $date2 = date_create($actual_returndate);
    $diff = date_diff($date1, $date2);

    $month = $diff->format("%m");
    $days = $diff->format("%d");
    $hour = $diff->format("%h");

    $mcharge = $car_monthlycharge * $month;
    $dcharge = $car_dailycharge * $days;
    $hcharge = $hourlycharge * $hour;
    $tot = $mcharge + $dcharge + $hcharge;
    $amount = $_POST['amount'] . $tot;




    $sql = "INSERT INTO `booking`(`cust_name`,`bookingtype`,`car_name`, `car_category`, `car_brand`, `car_model`,`car_seatingcapacity`, `cust_drivinglicenseno`, `car_dailycharge`,`car_monthlycharge`,`bookingdate`,`actual_returndate`,`car_hourlycharge`,`status`,`comment`, `amount`) VALUES ('$fullname','$bookingtype','$car_name','$car_category','$car_brand','$car_model','$car_seatingcapacity','$driving_license_no','$car_dailycharge','$car_monthlycharge','$bookingdate','$actual_returndate','$car_hourlycharge','$status','$comment','$amount')";


    $result = $dbconn->query($sql);

    if ($result == TRUE) {
        echo '<script>alert("New Booking Added Successfully")</script>';
    } else {
        echo "Error insertttt:" . $sql . "<br>" . $dbconn->error;
    }


    mysqli_close($dbconn);
}

?>




<div class="content-main">
    <h3>Book a Car</h3>

    <div class="container container-stl">

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="row">
                <div class="col-6">

                    <br>
                    <img src="../car_images/<?php echo $image; ?>" class="bookingpreview" name="car_image">
                    <br><br>

                    <input type="text" class="form-control" name="bookingtype" value="self_driving" hidden>

                    <input type="text" class="form-control" name="cust_name" hidden>

                    <label for="" class="form-label">Car Name</label>
                    <input type="text" class="form-control" name="car_name" value="<?php echo $carname; ?>" readonly><br>

                    <label for="" class="form-label">Car Category</label>
                    <input type="text" class="form-control" name="car_category" value="<?php echo $category; ?>" readonly><br>

                    <label for="" class="form-label">Car Brand</label>
                    <input type="text" class="form-control" name="car_brand" value="<?php echo $brand; ?>" readonly><br>

                    <label for="" class="form-label">Car Model</label>
                    <input type="text" class="form-control" name="car_model" value="<?php echo $model; ?>" readonly><br>

                    <label for="" class="form-label">Car Seating Capacity</label>
                    <input type="text" class="form-control" name="car_seatingcapacity" value="<?php echo $seatingcapacity; ?>" readonly><br>

                    <label for="" class="form-label">Car Hourly Charge</label>
                    <input type="text" class="form-control" name="car_hourlycharge" value="<?php echo $hourlycharge; ?>" readonly><br>

                    <label for="" class="form-label">Car Daily Charge</label>
                    <input type="text" class="form-control" name="car_dailycharge" value="<?php echo $dailycharge; ?>" readonly><br>

                    <label for="" class="form-label">Car Monthly Charge</label>
                    <input type="text" class="form-control" name="car_monthlycharge" value="<?php echo $monthlycharge; ?>" readonly><br>

                    <!-- <label for="" class="form-label">Customer License No</label> -->
                    <input type="text" class="form-control" name="cust_drivinglicenseno" hidden>


                    <label for="" class="form-label">Booking Date</label>
                    <input type="datetime-local" name="bookingdate" class="form-control"><br>

                    <label for="" class="form-label">Return Date</label>
                    <input type="datetime-local" name="actual_returndate" class="form-control"><br>

                    <label for="" class="form-label">Comment</label>
                    <input type="text" class="form-control" name="comment" style="padding-top: 9rem;"><br>

                    <input type="text" name="status" class="form-control" value="pending" hidden>

                    <input type="text" class="form-control" name="amount" value="" hidden><br>

                </div>


                <div class="col-6">

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
                    <input type="text" class="form-control" name="reference_no">

                    <input type="text" name="premium_customer" value="no" hidden>



                </div>


                <div class="wrap">
                    <button type="submit" name="submit" value="Submit" class="buttonn">Submit</button>
                </div>


            </div>

    </div>

    </form>
</div>

</div>

<?php include "includes/footer.php"; ?>