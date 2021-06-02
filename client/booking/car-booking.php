<?php

$sql = "SELECT * FROM car where available ='yes'";

if (isset($_GET['search'])) {
    $category = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['categorysearch']));
    $type = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['cartypesearch']));
    $seatingcapacity = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));

    $sql = "SELECT * FROM car WHERE category ='$category' and type ='$type' and seatingcapacity='$seatingcapacity'";
}

$result = $dbconn->query($sql);


?>

<?php include 'includes/slider.php'; ?>

<div class="row">
    <div class="col-12 mt-1 col-centered">
        <form action="" method="GET">

            <div class="input-group ">
                <!-- <input type="text" class="form-control" placeholder="Category" name="categorysearch"> -->

                <select class="form-control" name="categorysearch">
                <option selected disabled hidden>Select</option>
                    <option>Luxury</option>
                    <option>Semi-Luxury</option>
                </select>


                <!-- <input type="text" class="form-control" placeholder="Car Type" name="cartypesearch"> -->

                <select class="form-control" name="cartypesearch">
                <option selected disabled hidden>Select</option>
                    <<option value="Sedan">Sedan</option>
                  <option value="SUV">SUV</option>
                  <option value="MPV">MPV</option>
                  <option value="Hatchback">Hatchback</option>
                  <option value="Crossover">Crossover</option>
                  <option value="Coupe">Coupe</option>
                  <option value="Convertible">Convertible</option>
                </select>

                <!-- <input type="text" class="form-control" placeholder="Seating Capacity" name="search"> -->

                <select class="form-control" name="search">
                <option selected disabled hidden>Select</option>
                    <option>4</option>
                    <option>8</option>
                </select>

                <div class="input-group-append">
                    <button class="btn btn-danger" type="submit">Find</button>
                </div>

            </div>
        </form>
    </div>
</div>

<!-- <br>
<?php include 'includes/slider.php'; ?> -->



<div class="content-main">

    <div class="row">

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                
        ?> 
        
        <div class="col-12 col-md-6 col-sm-6 col-lg-3">
                    <!-- <div class="card-group"> -->
                        <div class="card edcard">
                            <img src="../../../cruz-tech-car-rental-system/car_images/<?php echo $row['image']; ?>" class="card-img-top booking-preview">
                            <div class="card-body" style="position:relative;">
                                <h5 class="card-title"><?php echo $row['carname']; ?></h5>
                                <p class="card-text">Brand: <?php echo $row['brand']; ?></p>
                                <p class="card-text">Type: <?php echo $row['type']; ?></p>
                                <p class="card-text">Seating Capacity: <?php echo $row['seatingcapacity']; ?></p>
                                <!-- <a class="btn btn-info"  href="add-car-booking.php?carid=<?php echo $row['carid']; ?>">Book</a> -->

                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        BOOK
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="add-car-booking.php?carid=<?php echo $row['carid']; ?>">Self Driving</a>
                                        <a class="dropdown-item" href="add-car-booking-with-driver.php?carid=<?php echo $row['carid']; ?>">With
                                            Driver</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <!-- </div> -->
                </div>





        <?php        }
        }
        ?>


    </div>
</div>