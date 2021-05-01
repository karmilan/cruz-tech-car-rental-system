<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
include "includes/dbconfig.php";

$sql = "SELECT * FROM car where available ='yes'";

$result = $dbconn->query($sql);


?>

<div class="content-main">

<div class="row">
    <h2>Car Details</h2>
    <div class="col">
        
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                
                <div class="card" style="width: 17rem; display: inline-block; margin: 10px;">
                    <img src="car_images/<?php echo $row['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['carname']; ?></h5>
                        <p class="card-text">Brand: <?php echo $row['brand']; ?></p>
                        <p class="card-text">Type: <?php echo $row['type']; ?></p>
                        <p class="card-text">Seating Capacity: <?php echo $row['seatingcapacity']; ?></p>
                        <a class="btn btn-info"  href="add-car-booking.php?carid=<?php echo $row['carid']; ?>">Book</a>
                    </div>
                </div> 





        <?php        }
        }
        ?>
        
    </div>
</div>
</div>





<?php include 'includes/footer.php'; ?>

</body>

</html>