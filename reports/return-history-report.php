<!-- <?php include('session.php'); ?> -->

<?php include 'includes/header.php'; ?>
<?php include "includes/dbconfig.php"; ?>


<?php
// include 'dbconfig.php';

$sql = "SELECT * FROM booking where status='returned' ORDER BY bookingtime DESC";

if (isset($_GET['search'])) {
    $bookingid = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM booking WHERE bookingid ='$bookingid'";
}

$result = $dbconn->query($sql);


?>

<br>
<!-- <div class="content-main"> -->
<div class="container-fluid">

<img src="../client/images/TUCKTUCKPNGg.png" style="width: 200px; height: 60px;
    object-fit: cover; margin-left: 55rem; position: absolute;">
    <h2>Return Details Report</h2>



    <div class="input-group" id="print-btn">
        <div class="form-outline">

            <form action="" method="GET">
                <input type="text" placeholder="Type the name here" name="search" class="form-control">
        </div>


        <button type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
            <i class="fa fa-search"></i>
        </button>

        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="return-history-report.php" class="btn btn-outline-success">View All</a>
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">print</button>

        </form>
    </div>
    <br>

    <!-- <div class="tbl-style"> -->
    <table class="table table-hover" style="font-size: x-small;">
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Booking Type</th>
                <th>Customer Name</th>
                <th>Car Name</th>
                <th>Car Category</th>
                <th>Car Brand</th>
                <th>Car Model</th>
                <th>Seating Capacity</th>
                <th>Car Monthly Charge</th>
                <th>Car Daily Charge</th>
                <th>Car Hourly Charge</th>
                <th>Customer License No</th>
                <th>Booking Date</th>
                <th>Return Date</th>
                <th>Extract Return Date</th>
                <th>Amount</th>
                <th>Status</th>
                <th>comment</th>
                <th>Payment</th>

            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <tr>
                        <td><?php echo $row['bookingid']; ?></td>
                        <td><?php echo $row['bookingtype']; ?></td>
                        <td><?php echo $row['cust_name']; ?></td>
                        <td><?php echo $row['car_name']; ?></td>
                        <td><?php echo $row['car_category']; ?></td>
                        <td><?php echo $row['car_brand']; ?></td>
                        <td><?php echo $row['car_model']; ?></td>
                        <td><?php echo $row['car_seatingcapacity']; ?></td>
                        <td><?php echo $row['car_monthlycharge']; ?></td>
                        <td><?php echo $row['car_dailycharge']; ?></td>
                        <td><?php echo $row['car_hourlycharge']; ?></td>
                        <td><?php echo $row['cust_drivinglicenseno']; ?></td>
                        <td><?php echo $row['bookingdate']; ?></td>
                        <td><?php echo $row['actual_returndate']; ?></td>
                        <td><?php echo $row['extract_returndate']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['comment']; ?></td>
                        <td><?php echo $row['payment']; ?></td>

                    </tr>

            <?php        }
            }
            ?>

        </tbody>
    </table>
    <!-- </div> -->

</div>
<!-- </div> -->


<?php include '../includes/footer.php'; ?>