<?php include('session.php'); ?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
include "includes/dbconfig.php";

$sql = "SELECT * FROM booking where status='pending' ORDER BY bookingtime DESC;";

if (isset($_GET['search'])) {
    $bookingid = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM booking WHERE bookingid ='$bookingid' and status='pending'";
}

$result = $dbconn->query($sql);


?>

<div class="content-main">
    <div class="container">
        <h2>Pending Inquiries</h2>

            <div class="input-group">
                <div class="form-outline">

                    <form action="" method="GET">
                        <input type="text" placeholder="Type the name here" name="search" class="form-control">
                </div>


                <button type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
                    <i class="fa fa-search"></i>
                </button>

                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="view-inquiry.php" class="btn btn-outline-success">View All</a>

                </form>
            </div>
            <br>
            <div class="tbl-style">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Car Image</th>
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
                                    <td><?php echo $row['car_image']; ?></td>
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
                                    <td><?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['comment']; ?></td>
                                    <td><?php echo $row['payment']; ?></td>

                                    <td><a class="btn btn-info" href="update-booking.php?bookingid=<?php echo $row['bookingid']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

                                    <td><a class="btn btn-danger" href="delete-booking.php?bookingid=<?php echo $row['bookingid']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                </tr>

                        <?php        }
                        }
                        ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

    <?php include 'includes/footer.php'; ?>