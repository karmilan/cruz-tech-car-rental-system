<?php
   include('session.php');
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>


<?php
include "includes/dbconfig.php";

// if (isset($_POST['update'])) {
//     $carid = $_POST['carid'];
//     $category = $_POST['category'];
//     $brand = $_POST['brand'];
//     $model = $_POST['model'];
//     $carname = $_POST['carname'];
//     $type = $_POST['type'];
//     $seatingcapacity = $_POST['seatingcapacity'];
//     $plateno = $_POST['plateno'];
//     $fueltype = $_POST['fueltype'];
//     $fuelcapacity = $_POST['fuelcapacity'];
//     $manufactureyr = $_POST['manufactureyr'];
//     $colour = $_POST['colour'];
//     $hourlycharge = $_POST['hourlycharge'];
//     $dailycharge = $_POST['dailycharge'];
//     $weeklycharge = $_POST['weeklycharge'];
//     $monthlycharge = $_POST['monthlycharge'];
//     $insurancecharge = $_POST['insurancecharge'];
//     $details = $_POST['details'];
//     $branch = $_POST['branch'];
//     $image = $_POST['image'];
//     $available = $_POST['available'];


//     // $sql = "UPDATE `car` SET `category`='$category', `brand`='$brand', `model`='$model', `carname`='$carname', `type`='$type', `seatingcapacity`='$seatingcapacity', `plateno`='$plateno', `fueltype`='$fueltype', `fuelcapacity`='$fuelcapacity', `manufactureyr`='$manufactureyr', `colour`='$colour', `hourlycharge`='$hourlycharge', `dailycharge`='$dailycharge', `weeklycharge`='$weeklycharge', `monthlycharge`='$monthlycharge', `insurancecharge`='$insurancecharge', `details`='$details', `branch`='$branch', `image`='$image', `available`='$available' WHERE `carid`='$carid'";

//     $result = $dbconn->query($sql);

//     if ($result == TRUE) {
//         echo '<script>alert("Car Updated Successfully")</script>';
//     } else {
//         echo "Error:" . $sql . "<br>" . $dbconn->error;
//     }
// }


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


<?php
include "includes/dbconfig.php";

if (isset($_POST['submit'])) {
    $car_image = $_POST['car_image'];
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
    // $amount = $_POST['car_dailycharge'] * $bookingdays;
    
    $date1=date_create($bookingdate);
$date2=date_create($actual_returndate);
$diff=date_diff($date1,$date2);

$month=$diff->format("%m");
$days=$diff->format("%d");
$hour=$diff->format("%h");

$mcharge=$car_monthlycharge*$month;
$dcharge=$car_dailycharge*$days;
$hcharge=$hourlycharge*$hour;
$tot=$mcharge+$dcharge+$hcharge;
$amount = $_POST['amount'].$tot;

echo $month; echo "<br>";
echo $days; echo "<br>";
echo $hour; echo "<br>";



    $sql = "INSERT INTO `booking`(`car_image`,`car_name`, `car_category`, `car_brand`, `car_model`,`car_seatingcapacity`, `cust_drivinglicenseno`, `car_dailycharge`,`car_monthlycharge`,`bookingdate`,`actual_returndate`,`car_hourlycharge`, `amount`) VALUES ('$car_image','$car_name','$car_category','$car_brand','$car_model','$car_seatingcapacity','$cust_drivinglicenseno','$car_dailycharge','$car_monthlycharge','$bookingdate','$actual_returndate','$car_hourlycharge','$amount')";


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
                    <label for="" class="form-label">Car img</label>
                    <img src="car_images/<?php echo $image; ?>" class="card-img-top" alt="..." >
                    <br>

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

                    <label for="" class="form-label">Customer License No</label>
                    <input type="text" class="form-control" name="cust_drivinglicenseno"><br>

                    <label for="" class="form-label">Booking Date</label>
                    <input type="datetime-local" name="bookingdate" class="form-control"><br>

                    <label for="" class="form-label">Return Date</label>
                    <input type="datetime-local" name="actual_returndate" class="form-control"><br>

                   

                    <!-- <label for="" class="form-label">Amount</label>
                    <input type="text" class="form-control" name="amount" value=""><br> -->


                    <input type="submit" name="submit" value="Add" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a type="button" class="btn btn-secondary" href="view-booking.php">Vew All Booking Details >></a><br><br>

                </div>

                <div class="col-6">
                <?php include 'view-licenseno.php'; ?>
                </div>


            </div>

        </form>
    </div>

</div>

<?php include 'includes/footer.php'; ?>