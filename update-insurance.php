<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['update'])) {
    $insuranceid = $_POST['insuranceid'];
    $insurancecompanyname = $_POST['insurancecompanyname'];
   $address = $_POST['address'];
   $contactpersonname = $_POST['contactpersonname'];
   $contactno = $_POST['contactno'];



    $sql = "UPDATE `insurance` SET `insurancecompanyname`='$insurancecompanyname', `address`='$address', `contactpersonname`='$contactpersonname', `contactno`='$contactno' WHERE `insuranceid`='$insuranceid'";

    $result = $dbconn->query($sql);

    if ($result == TRUE) {
        echo '<script>alert("Insurance Updated Successfully")</script>';
    } else {
        echo "Error:" . $sql . "<br>" . $dbconn->error;
    }
}


if (isset($_GET['insuranceid'])) {
    $insuranceid = $_GET['insuranceid'];

    $sql = "SELECT * FROM `insurance` WHERE `insuranceid`='$insuranceid'";

    $result = $dbconn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            
            $insuranceid = $row['insuranceid'];
    $insurancecompanyname = $row['insurancecompanyname'];
   $address = $row['address'];
   $contactpersonname = $row['contactpersonname'];
   $contactno = $row['contactno'];
        }

?>




        <div class="content-main">
            <h3>Update Mechanic</h3>

            <div class="container container-stl">

                <form action="" method="POST">

                    <div class="row">
                        <div class="col">

                            <br>

                            <input type="hidden" name="insuranceid" class="form-control" value="<?php echo $insuranceid; ?>">
                            <br>

                            <label for="" class="form-label">Insurance Company Name</label>
               <input type="text" class="form-control" name="insurancecompanyname" value="<?php echo $insurancecompanyname; ?>"><br>

               <label for="" class="form-label">Address</label>
               <input type="text" class="form-control tfield" name="address" value="<?php echo $address; ?>"><br>

               <label for="" class="form-label">Contact Person Name</label>
               <input type="text" class="form-control" name="contactpersonname" value="<?php echo $contactpersonname; ?>"><br>

               <label for="" class="form-label">Contact No</label>
               <input type="text" class="form-control" name="contactno" value="<?php echo $contactno; ?>"><br>



                            <br><br>
                            <input type="submit" value="Update" name="update" class="btn btn-info">
                            <a type="button" class="btn btn-secondary" href="view-insurance.php">Vew All Insurance Details >></a>
                            <br><br>
                            </fieldset>
                        </div>
                </form>

            </div>
        </div>

        <!-- <div class="col-8">
			<div class="container container-stl">
				<?php include 'availablecar.php'; ?>

			</div>
		</div> -->

        </div>



        <!-- </body>
		</html> -->




<?php
    } else {
        header('Location: view-car.php');
    }
}
?>
<?php include 'includes/footer.php'; ?>