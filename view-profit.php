<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php'; ?>

<!-- get data betwee dates -->

<div class="content-main">
    <div class="container">

        <form method="POST">
            
                    <div class="input-group" style="width: 65%; font-size: 20px;">
                        <label class="form-label">From: </label>&nbsp;
                        <input class="form-control" type="date" name="from">&nbsp;&nbsp;&nbsp;&nbsp;


                        <label class="form-label"> To: </label>&nbsp;
                        <input class="form-control" type="date" name="to">&nbsp; 
                        <input class="btn btn-success" type="submit" value="Get Data" name="submit">
                    </div>

        </form><br>

        <div class="tbl-style">

            <h4>Data Between Selected Dates</h4>


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

                    </tr>
                </thead>
                <tbody>

                    <?php
include "includes/dbconfig.php";
			if (isset($_POST['submit'])){
				
				$from=date('Y-m-d',strtotime($_POST['from']));
				$to=date('Y-m-d',strtotime($_POST['to']));
                $oquery=$dbconn->query("select * from `booking` where bookingdate between '$from' and '$to'");
				while($row = $oquery->fetch_array()){
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
                    </tr>
                    <?php echo $result; ?>
                    <?php 
				}
			}
		?>
                </tbody>
            </table>
        </div>

    </div>
</div>
</div>

<!-- get data betwee dates -->

</div>



<?php include 'includes/footer.php';?>

