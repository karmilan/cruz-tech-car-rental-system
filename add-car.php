<?php include('session.php'); ?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['submit'])) {
   $category = $_POST['category'];
   $brand = $_POST['brand'];
   $model = $_POST['model'];
   $carname = $_POST['carname'];
   $type = $_POST['type'];
   $seatingcapacity = $_POST['seatingcapacity'];
   $plateno = $_POST['plateno'];
   $fueltype = $_POST['fueltype'];
   $fuelcapacity = $_POST['fuelcapacity'];
   $manufactureyr = $_POST['manufactureyr'];
   $colour = $_POST['colour'];
   $hourlycharge = $_POST['hourlycharge'];
   $dailycharge = $_POST['dailycharge'];
   $weeklycharge = $_POST['weeklycharge'];
   $monthlycharge = $_POST['monthlycharge'];
   $insurancecharge = $_POST['insurancecharge'];
   $details = $_POST['details'];
   $branch = $_POST['branch'];
   // $image = $_POST['image'];
   $available = $_POST['available'];

   //   $targetpath = "../car_images/";
    $image = $_FILES['image']['name'];
    
     $image_tmp = $_FILES['image']['tmp_name'];

   //   move_uploaded_file($_FILES ['image']['tmp_name'],$targetpath);
   //   move_uploaded_file($file_tmp, "driverimg/" . $file_name);
     move_uploaded_file($image_tmp,"car_images/".$image);


   $sql = "INSERT INTO `car`(`category`, `brand`, `model`, `carname`, `type`, `seatingcapacity`, `plateno`, `fueltype`, `fuelcapacity`, `manufactureyr`, `colour`, `hourlycharge`, `dailycharge`, `weeklycharge`, `monthlycharge`, `insurancecharge`,`details`,`branch`,`image`,`available`) VALUES ('$category','$brand','$model','$carname','$type', '$seatingcapacity', '$plateno', '$fueltype','$fuelcapacity','$manufactureyr','$colour','$hourlycharge', '$dailycharge','$weeklycharge','$monthlycharge','$insurancecharge','$details','$branch','$image','$available')";


   $result = $dbconn->query($sql);

   if ($result == TRUE) {
      echo '<script>alert("New Car Added Successfully")</script>';
   } else {
      echo "Error insertttt:" . $sql . "<br>" . $dbconn->error;
   }


   mysqli_close($dbconn);
}

?>


<div class="content-main">
   <h3>add Car</h3>

   <div class="container container-stl">

      <form action="" method="POST" enctype="multipart/form-data">

         <div class="row">
            <div class="col">

               <br>
               <label for="" class="form-label">Category</label>
               <select class="form-control" name="category">
                  <option value="Luxury">Luxury</option>
                  <option value="Semi Luxury">Semi Luxury</option>
               </select>

               <label for="" class="form-label">Brand</label>
               <input type="text" class="form-control" name="brand"><br>

               <label for="" class="form-label">Model</label>
               <input type="text" class="form-control" name="model"><br>

               <label for="" class="form-label">Car Name</label>
               <input type="text" class="form-control" name="carname"><br>

               <label for="" class="form-label">Car Type</label>

               <select class="form-control" name="type">
                  <option value="Sedan">Sedan</option>
                  <option value="SUV">SUV</option>
                  <option value="MPV">MPV</option>
                  <option value="Hatchback">Hatchback</option>
                  <option value="Crossover">Crossover</option>
                  <option value="Coupe">Coupe</option>
                  <option value="Convertible">Convertible</option>
               </select><br>

               <label for="" class="form-label">Seating Capacity</label>
               <input type="text" class="form-control" name="seatingcapacity"><br>

               <label for="" class="form-label">Plate No</label>
               <input type="text" class="form-control" name="plateno"><br>

               <label for="" class="form-label">Fuel Type</label>
               <input type="text" class="form-control" name="fueltype"><br>

               <label for="" class="form-label">Fuel Capacity</label>
               <input type="text" class="form-control" name="fuelcapacity"><br>

               <label for="" class="form-label">Manufacture Year</label>
               <input type="number" min="1900" max="2099" step="1" value="2021" class="form-control" name="manufactureyr" /><br>

            </div>

            <div class="col">

               <br>
               <label for="" class="form-label">Colour</label>
               <input type="text" class="form-control" name="colour"><br>

               <label for="" class="form-label">Hourly Charge</label>
               <input type="text" class="form-control" name="hourlycharge"><br>

               <label for="" class="form-label">Daily Charge</label>
               <input type="text" class="form-control" name="dailycharge"><br>

               <label for="" class="form-label">Weekly Charge</label>
               <input type="text" class="form-control" name="weeklycharge"><br>

               <label for="" class="form-label">Monthly Charge</label>
               <input type="text" class="form-control" name="monthlycharge"><br>

               <label for="" class="form-label">Insurance Charge</label>
               <input type="text" class="form-control" name="insurancecharge"><br>

               <label for="" class="form-label">Details</label>
               <input type="text" class="form-control" name="details"><br>

               <label for="" class="form-label">Branch</label>
               <input type="text" class="form-control" name="branch"><br>

               

               <label for="" class="form-label">Image</label>
               <input type="file" class="form-control" name="image" id="image"><br>

               <label for="" class="form-label">Availability</label><br>
               <input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="available" value="yes">Yes
               <input type="radio" style="padding: 10px;" class="form-check-input mt-0" name="available" value="no">No
               <br><br>
               <input type="submit" name="submit" value="Add" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a type="button" class="btn btn-secondary" href="view-car.php">Vew All Car Details >></a>

            </div>
         </div>

      </form>
   </div>

</div>

<?php include 'includes/footer.php'; ?>