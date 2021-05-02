<?php include('session.php'); ?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['submit'])) {
   $insurancecompanyname = $_POST['insurancecompanyname'];
   $address = $_POST['address'];
   $contactpersonname = $_POST['contactpersonname'];
   $contactno = $_POST['contactno'];


   $sql = "INSERT INTO `insurance`(`insurancecompanyname`,`address`, `contactpersonname`, `contactno`) VALUES ('$insurancecompanyname','$address','$contactpersonname','$contactno')";


   $result = $dbconn->query($sql);

   if ($result == TRUE) {
      echo '<script>alert("New Insurance Added Successfully")</script>';
   } else {
      echo "Error insertttt:" . $sql . "<br>" . $dbconn->error;
   }


   mysqli_close($dbconn);
}

?>

<div class="content-main">
   <h3>Add Insurance</h3>

   <div class="container container-stl">

      <form action="" method="POST" enctype="multipart/form-data">

         <div class="row">
            <div class="col">

               <br>
               <label for="" class="form-label">Insurance Company Name</label>
               <input type="text" class="form-control" name="insurancecompanyname"><br>

               <label for="" class="form-label">Address</label>
               <input type="text" class="form-control tfield" name="address"><br>

               <label for="" class="form-label">Contact Person Name</label>
               <input type="text" class="form-control" name="contactpersonname"><br>

               <label for="" class="form-label">Contact No</label>
               <input type="text" class="form-control" name="contactno"><br>

               <input type="submit" name="submit" value="Add" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a type="button" class="btn btn-secondary" href="view-insurance.php">Vew All Insurance Details >></a><br><br>

            </div>

            
         </div>

      </form>
   </div>

</div>

<?php include 'includes/footer.php'; ?>