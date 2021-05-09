<?php include 'includes/header.php';?>
<?php include "includes/dbconfig.php";?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

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

        </form> <hr>

        <div class="tbl-style" style="height:18rem;">

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
// include "includes/dbconfig.php";
			if (isset($_POST['submit'])){
				
				$from=date('Y-m-d',strtotime($_POST['from']));
				$to=date('Y-m-d',strtotime($_POST['to']));
                $query=$dbconn->query("select * from `booking` where bookingdate between '$from' and '$to'"); 
                // $oquery=$dbconn->query("SELECT sum(amount) as total FROM `booking` where bookingdate between '$from' and '$to'");
				while($row = $query->fetch_array()){
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

                    <?php 
				}
			}
            
		?>
                </tbody>
            </table>
        </div><hr>


        <!-- heheh -->
        <?php
// include "includes/dbconfig.php";
			if (isset($_POST['submit'])){
				
				$from=date('Y-m-d',strtotime($_POST['from']));
				$to=date('Y-m-d',strtotime($_POST['to']));
                // $query=$dbconn->query("select * from `booking` where bookingdate between '$from' and '$to'"); 
                $oquery=$dbconn->query("SELECT sum(amount) as total FROM `booking` where bookingdate between '$from' and '$to'");
				while($row = $oquery->fetch_array()){
					?>

<?php $total_amount = $row['total']; ?>

        <div class="row">

            <div class="col-4">

                <div class="card text-white bg-primary mb-3 dashboard-card" style="max-width: 18rem;">
                <div class="card-header">Total Amount for Selected Date</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h4> Rs.&nbsp;<?php echo $total_amount; ?>
                                </h4>
                                <h6>from <?php echo $from; ?> to <?php echo $to; ?></h6>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            

        </div>

        <?php 
				}
			}
            
		?>

        <!-- // -->

        

    </div>
    </div>



    <?php include 'includes/footer.php';?>