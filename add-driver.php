<?php include('session.php'); ?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['submit'])) {
   $drivername = $_POST['drivername'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $address = $_POST['address'];
   $contactno = $_POST['contactno'];
   $licenseno = $_POST['licenseno'];
   $dob = $_POST['dob'];
   $referencename = $_POST['referencename'];
   $referenceno = $_POST['referenceno'];
  // $driverimage = $_POST['driverimage'];


   $sql = "INSERT INTO `driver`(`drivername`, `gender`, `age`, `address`, `contactno`, `licenseno`, `dob`, `referencename`, `referenceno`) VALUES ('$drivername','$gender','$age','$address','$contactno', '$licenseno', '$dob', '$referencename','$referenceno')";


   $result = $dbconn->query($sql);

   if ($result == TRUE) {
      echo '<script>alert("New Driver Added Successfully")</script>';
   } else {
      echo "Error insertttt:" . $sql . "<br>" . $dbconn->error;
   }


   mysqli_close($dbconn);
}

?>

<div class="content-main">
   <h3>Add Driver</h3>

   <div class="container container-stl">

      <form action="" method="POST" enctype="multipart/form-data">

         <div class="row">
            <div class="col">

               <br>
               <label for="" class="form-label">Driver Name</label>
               <input type="text" class="form-control" name="drivername"><br>

               <label for="" class="form-label">Gender</label>
               <select class="form-control" name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
               </select><br>

               <label for="" class="form-label">Age</label>
               <input type="text" class="form-control" name="age"><br>

               <label for="" class="form-label">Address</label>
               <input type="text" class="form-control" name="address"><br>

               <label for="" class="form-label">Contact No</label>
               <input type="text" class="form-control" name="contactno"><br>

               <label for="" class="form-label">License No</label>
               <input type="text" class="form-control" name="licenseno"><br>

               <label for="" class="form-label">Date of Birth</label>
               <input type="date" class="form-control" name="dob"><br>

               <label for="" class="form-label">Reference Name</label>
               <input type="text" class="form-control" name="referencename"><br>

               <label for="" class="form-label">Reference No</label>
               <input type="text" class="form-control" name="referenceno"><br>

               <?php
               if (isset($_FILES['driverimage'])) {
                  $errors = array();
                  $file_name = $_FILES['driverimage']['name'];
                  $file_size = $_FILES['driverimage']['size'];
                  $file_tmp = $_FILES['driverimage']['tmp_name'];
                  $file_type = $_FILES['driverimage']['type'];
                  //   $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

                  $exploded = explode('.', $_FILES['driverimage']['name']);
                  $file_ext = strtolower(end($exploded));

                  $extensions = array("jpeg", "jpg", "png");

                  if (in_array($file_ext, $extensions) === false) {
                     $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                  }

                  if ($file_size > 2097152) {
                     $errors[] = 'File size must be excately 2 MB';
                  }

                  if (empty($errors) == true) {
                     move_uploaded_file($file_tmp, "driverimg/" . $file_name);
                     echo "Success";
                  } else {
                     print_r($errors);
                  }
               }
               ?>

               <label for="" class="form-label">Driver Image</label>
               <input type="file" class="form-control" name="driverimage"><br>

               <input type="submit" name="submit" value="Add" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a type="button" class="btn btn-secondary" href="view-driver.php">Vew All Drivers Details >></a><br><br>

            </div>

            
         </div>

      </form>
   </div>

</div>

<?php include 'includes/footer.php'; ?>