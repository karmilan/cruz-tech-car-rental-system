<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['submit'])) {
   $companyname = $_POST['companyname'];
   $mechanicname = $_POST['mechanicname'];
   $contactno = $_POST['contactno'];
   $companyaddress = $_POST['companyaddress'];


   $sql = "INSERT INTO `mechanic`(`companyname`,`mechanicname`, `contactno`, `companyaddress`) VALUES ('$companyname','$mechanicname','$contactno','$companyaddress')";


   $result = $dbconn->query($sql);

   if ($result == TRUE) {
      echo '<script>alert("New Mechanic Added Successfully")</script>';
   } else {
      echo "Error insertttt:" . $sql . "<br>" . $dbconn->error;
   }


   mysqli_close($dbconn);
}

?>

<div class="content-main">
   <h3>Add Mechanic</h3>

   <div class="container container-stl">

      <form action="" method="POST" enctype="multipart/form-data">

         <div class="row">
            <div class="col">

               <br>
               <label for="" class="form-label">Company Name</label>
               <input type="text" class="form-control" name="companyname"><br>

               <label for="" class="form-label">Mechanic Name</label>
               <input type="text" class="form-control" name="mechanicname"><br>

               <label for="" class="form-label">Contact No</label>
               <input type="text" class="form-control" name="contactno"><br>

               <label for="" class="form-label">Company Address</label>
               <input type="text" class="form-control tfield" name="companyaddress"><br>

               <input type="submit" name="submit" value="Add" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a type="button" class="btn btn-secondary" href="view-mechanic.php">Vew All Mechanic Details >></a><br><br>

            </div>

            
         </div>

      </form>
   </div>

</div>

<?php include 'includes/footer.php'; ?>