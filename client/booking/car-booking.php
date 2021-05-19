<?php

$sql = "SELECT * FROM car where available ='yes'";

$result = $dbconn->query($sql);


?>

<div class="content-main">

    <div class="row">

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?> <div class="col-3">
            <div class="card-group">
                <div class="card edcard">
                    <img src="../../../cruz-tech-car-rental-system/car_images/<?php echo $row['image']; ?>"
                        class="card-img-top booking-preview">
                    <div class="card-body" style="position:relative;">
                        <h5 class="card-title"><?php echo $row['carname']; ?></h5>
                        <p class="card-text">Brand: <?php echo $row['brand']; ?></p>
                        <p class="card-text">Type: <?php echo $row['type']; ?></p>
                        <p class="card-text">Seating Capacity: <?php echo $row['seatingcapacity']; ?></p>
                        <!-- <a class="btn btn-info"  href="add-car-booking.php?carid=<?php echo $row['carid']; ?>">Book</a> -->

                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                BOOK
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="add-car-booking.php?carid=<?php echo $row['carid']; ?>">Self Driving</a>
                                <a class="dropdown-item"
                                    href="add-car-booking-with-driver.php?carid=<?php echo $row['carid']; ?>">With
                                    Driver</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <?php        }
        }
        ?>


    </div>
</div>