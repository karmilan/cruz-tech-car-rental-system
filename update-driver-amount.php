<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['update'])) {
    $da_id = $_POST['da_id'];
    $driver_hourly_charge = $_POST['driver_hourly_charge'];
    $driver_daily_charge = $_POST['driver_daily_charge'];
    $driver_monthly_charge = $_POST['driver_monthly_charge'];
    

    $sql = "UPDATE `driver_amount` SET `driver_hourly_charge`='$driver_hourly_charge', `driver_daily_charge`='$driver_daily_charge', `driver_monthly_charge`='$driver_monthly_charge' WHERE `da_id`='$da_id'";

    $result = $dbconn->query($sql);

    if ($result == TRUE) {
        echo '<script>alert("Amount Updated Successfully")</script>';
    } else {
        echo "Error:" . $sql . "<br>" . $dbconn->error;
    }
}


if (isset($_GET['da_id'])) {
    $da_id = $_GET['da_id'];

    $sql = "SELECT * FROM `driver_amount` WHERE `da_id`='$da_id'";

    $result = $dbconn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $da_id = $row['da_id'];
    $driver_hourly_charge = $row['driver_hourly_charge'];
    $driver_daily_charge = $row['driver_daily_charge'];
    $driver_monthly_charge = $row['driver_monthly_charge'];
        }

?>




        <div class="content-main">
            <h3>Update Driver Amount</h3>

            <div class="container container-stl">

                <form action="" method="POST">

                    <div class="row">
                        <div class="col">

                            <br>

                            <input type="hidden" name="da_id" class="form-control" value="<?php echo $da_id; ?>">
                            <br>

                            <label for="" class="form-label">Hourly Charge</label>
                            <input type="text" class="form-control" name="driver_hourly_charge" value="<?php echo $driver_hourly_charge; ?>"><br>

                            <label for="" class="form-label">Daily Charge</label>
                            <input type="text" class="form-control" name="driver_daily_charge" value="<?php echo $driver_daily_charge; ?>"><br>

                            <label for="" class="form-label">Monthly Charge</label>
                            <input type="text" class="form-control" name="driver_monthly_charge" value="<?php echo $driver_monthly_charge; ?>">

                           
                            <br>
                            <input type="submit" value="Update" name="update" class="btn btn-info">
                            
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