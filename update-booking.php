<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['update'])) {
    $bookingid = $_POST['bookingid'];
    $car_image = $_POST['car_image'];
    $car_name = $_POST['car_name'];
    $car_category = $_POST['car_category'];
    $car_brand = $_POST['car_brand'];
    $car_model = $_POST['car_model'];
    $car_seatingcapacity = $_POST['car_seatingcapacity'];
    $cust_drivinglicenseno = $_POST['cust_drivinglicenseno'];
    $car_dailycharge = $_POST['car_dailycharge'];
    $bookingdays = $_POST['bookingdays'];
    $amount = $_POST['car_dailycharge'] * $bookingdays;


    $sql = "UPDATE `booking` SET `cust_drivinglicenseno`='$cust_drivinglicenseno', `bookingdays`='$bookingdays',`amount`='$amount' WHERE `bookingid`='$bookingid'";

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
    $car_image = $row['car_image'];
    $car_name = $row['car_name'];
    $car_category = $row['car_category'];
    $car_brand = $row['car_brand'];
    $car_model = $row['car_model'];
    $car_seatingcapacity = $row['car_seatingcapacity'];
    $cust_drivinglicenseno = $row['cust_drivinglicenseno'];
    $car_dailycharge = $row['car_dailycharge'];
    $bookingdays = $row['bookingdays'];
    $amount = $row['car_dailycharge'] * $bookingdays;
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
                    <img src="..." class="card-img-top" alt="..." value="<?php echo $car_image; ?>" readonly>
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

                    <label for="" class="form-label">Car Daily Charge</label>
                    <input type="text" class="form-control" name="car_dailycharge" value="<?php echo $car_dailycharge; ?>" readonly><br>

                    <label for="" class="form-label">Customer License No</label>
                    <input type="text" class="form-control" name="cust_drivinglicenseno" value="<?php echo $cust_drivinglicenseno; ?>"><br>

                    <label for="" class="form-label">Booking Days</label>
                    <input type="text" class="form-control" name="bookingdays" value="<?php echo $bookingdays; ?>"><br>




                            <br><br>
                            <input type="submit" value="Update" name="update" class="btn btn-info">
                            <a type="button" class="btn btn-secondary" href="view-booking.php">Vew All Booking Details >></a>
                            <br><br>
                            </fieldset>
                        </div>
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