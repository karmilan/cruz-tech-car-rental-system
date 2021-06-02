<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>
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

<!-- driver amount -->

<?php
include "includes/dbconfig.php";

$sql = "SELECT * FROM driver_amount where `da_id`=1";

$result = $dbconn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {


        $driver_hourly_charge = $row['driver_hourly_charge'];
        $driver_daily_charge = $row['driver_daily_charge'];
        $driver_monthly_charge = $row['driver_monthly_charge'];
    }
}

?>




<!-- driver amount end -->



<!-- driver -->

<?php
include "includes/dbconfig.php";

$dsql = "SELECT * FROM driver";

$dresult = $dbconn->query($dsql);

?>

<!-- driver end -->



<?php
include "includes/dbconfig.php";

if (isset($_POST['update'])) {
    $bookingid = $_POST['bookingid'];
    $cust_name = $_POST['cust_name'];
    $car_name = $_POST['car_name'];
    $car_category = $_POST['car_category'];
    $car_brand = $_POST['car_brand'];
    $car_model = $_POST['car_model'];
    $car_seatingcapacity = $_POST['car_seatingcapacity'];
    $cust_drivinglicenseno = $_POST['cust_drivinglicenseno'];
    $driver_licenseno = $_POST['driver_licenseno'];
    $car_dailycharge = $_POST['car_dailycharge'];

    // $amount = $_POST['car_dailycharge']; 
    $car_monthlycharge = $_POST['car_monthlycharge'];
    $bookingdate = $_POST['bookingdate'];
    $actual_returndate = $_POST['actual_returndate'];
    $car_hourlycharge = $_POST['car_hourlycharge'];
    $status = $_POST['status'];
    $comment = $_POST['comment'];
    $payment = $_POST['payment'];

    $date1 = date_create($bookingdate);
    $date2 = date_create($actual_returndate);
    $diff = date_diff($date1, $date2);

    $month = $diff->format("%m");
    $days = $diff->format("%d");
    $hour = $diff->format("%h");

    $mcharge = $car_monthlycharge * $month + ($month * $driver_monthly_charge);
    $dcharge = $car_dailycharge * $days + ($days * $driver_daily_charge);
    $hcharge = $car_hourlycharge * $hour + ($hour * $driver_hourly_charge);
    $tot = $mcharge + $dcharge + $hcharge;
    $amount = $_POST['amount'] . $tot;


    $sql = "UPDATE `booking` SET `cust_drivinglicenseno`='$cust_drivinglicenseno',`driver_licenseno`='$driver_licenseno', `bookingdate`='$bookingdate',`actual_returndate`='$actual_returndate',`amount`='$amount',`status`='$status',`payment`='$payment' WHERE `bookingid`='$bookingid'";

    $result = $dbconn->query($sql);

    if ($result == TRUE) {
        echo '<script>alert("Booking Updated Successfully")</script>';
    } else {
        echo "Error:" . $sql . "<br>" . $dbconn->error;
    }
}


if (isset($_GET['bookingid'])) {
    $bookingid = $_GET['bookingid'];

    $sql = "SELECT * FROM `booking` WHERE `bookingid`='$bookingid'";

    $result = $dbconn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $bookingid = $row['bookingid'];
            $cust_name = $row['cust_name'];
            $car_name = $row['car_name'];
            $car_category = $row['car_category'];
            $car_brand = $row['car_brand'];
            $car_model = $row['car_model'];
            $car_seatingcapacity = $row['car_seatingcapacity'];
            $cust_drivinglicenseno = $row['cust_drivinglicenseno'];
            $driver_licenseno = $row['driver_licenseno'];
            $car_dailycharge = $row['car_dailycharge'];
            $car_hourlycharge = $row['car_hourlycharge'];
            $car_monthlycharge = $row['car_monthlycharge'];
            $bookingdate = $row['bookingdate'];
            $actual_returndate = $row['actual_returndate'];
            $status = $row['status'];
            $comment = $row['comment'];
            $payment = $row['payment'];
            $amount = $row['amount'];
        }

?>




        <div class="content-main">
            <h3>Update Booking</h3>

            <div class="container container-stl">
               
                    <form action="" method="POST">

                        <div class="row">
                            <div class="col">

                                <br>

                                <input type="hidden" name="bookingid" class="form-control" value="<?php echo $bookingid; ?>">
                                <br>

                                <label for="" class="form-label">Car img</label>
                                <input type="text" class="form-control" name="cust_name" value="<?php echo $cust_name; ?>" readonly>
                                <br>

                                <label for="" class="form-label">Car Name</label>
                                <input type="text" class="form-control" name="car_name" value="<?php echo $car_name; ?>" readonly><br>

                                <label for="" class="form-label">Car Category</label>
                                <input type="text" class="form-control" name="car_category" value="<?php echo $car_category; ?>" readonly><br>

                                <label for="" class="form-label">Car Brand</label>
                                <input type="text" class="form-control" name="car_brand" value="<?php echo $car_brand; ?>" readonly><br>

                                <label for="" class="form-label">Car Model</label>
                                <input type="text" class="form-control" name="car_model" value="<?php echo $car_model; ?>" readonly><br>

                                <label for="" class="form-label">Car Seating Capacity</label>
                                <input type="text" class="form-control" name="car_seatingcapacity" value="<?php echo $car_seatingcapacity; ?>" readonly><br>

                                <label for="" class="form-label">Car Monthly Charge</label>
                                <input type="text" class="form-control" name="car_monthlycharge" value="<?php echo $car_monthlycharge; ?>" readonly><br>

                                <label for="" class="form-label">Car Daily Charge</label>
                                <input type="text" class="form-control" name="car_dailycharge" value="<?php echo $car_dailycharge; ?>" readonly><br>

                                <label for="" class="form-label">Car Hourly Charge</label>
                                <input type="text" class="form-control" name="car_hourlycharge" value="<?php echo $car_hourlycharge; ?>" readonly><br>

                                <label for="" class="form-label">Customer License No</label>
                                <input type="text" class="form-control" name="cust_drivinglicenseno" value="<?php echo $cust_drivinglicenseno; ?>"><br>

                                <label for="" class="form-label">Driver License No</label>
                                <!-- <input type="text" class="form-control" name="driver_licenseno" value="<?php echo $driver_licenseno; ?>"><br> -->


                                <select class="form-control" name="driver_licenseno">

                                    <?php
                                    while ($drow = $dresult->fetch_assoc()) {
                                    ?>
                                        <option><?php echo $drow['drivername']; ?>-<?php echo $drow['licenseno']; ?></option>

                                    <?php
                                    }
                                    ?>

                                </select><br>

                                <label for="" class="form-label">Booking Date</label>
                                <input type="text" name="bookingdate" class="form-control" value="<?php echo $bookingdate; ?>"><br>

                                <label for="" class="form-label">Return Date</label>
                                <input type="text" name="actual_returndate" class="form-control" value="<?php echo $actual_returndate; ?>"><br>

                                <label for="" class="form-label">Comment</label>
                                <input type="text" class="form-control" name="comment" value="<?php echo $comment; ?>"><br>

                                <label for="" class="form-label">Payment</label>
                                <input type="text" class="form-control" name="payment" value="<?php echo $payment; ?>"><br>

                                <label for="" class="form-label">Status</label>
                                <input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="status" value="confirmed" <?php if ($status == 'confirmed') {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?>>Confirmed
                                <input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="status" value="pending" <?php if ($status == 'pending') {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?>>Pending
                                <br><br>

                                <input type="text" class="form-control" name="amount" value="" hidden><br>




                                <br><br>
                                <input type="submit" value="Update" name="update" class="btn btn-info">
                                <a type="button" class="btn btn-secondary" href="view-booking.php">Vew All Booking Details >></a>
                                <br><br>
                                </fieldset>
                            </div>
                    </form>
               


            </div>
        </div>


<?php
    } else {
        header('Location: view-car.php');
    }
}
?>
<?php include 'includes/footer.php'; ?>