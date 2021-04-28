<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['update'])) {
    $driverid = $_POST['driverid'];
    $drivername = $_POST['drivername'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $licenseno = $_POST['licenseno'];
    $dob = $_POST['dob'];
    $referencename = $_POST['referencename'];
    $referenceno = $_POST['referenceno'];
    $driverimage = $_POST['driverimage'];


    $sql = "UPDATE `driver` SET `drivername`='$drivername', `gender`='$gender', `age`='$age', `address`='$address', `contactno`='$contactno', `licenseno`='$licenseno', `dob`='$dob', `referencename`='$referencename', `referenceno`='$referenceno', `driverimage`='$driverimage' WHERE `driverid`='$driverid'";

    $result = $dbconn->query($sql);

    if ($result == TRUE) {
        echo '<script>alert("Driver Updated Successfully")</script>';
    } else {
        echo "Error:" . $sql . "<br>" . $dbconn->error;
    }
}


if (isset($_GET['driverid'])) {
    $driverid = $_GET['driverid'];

    $sql = "SELECT * FROM `driver` WHERE `driverid`='$driverid'";

    $result = $dbconn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $drivername = $row['drivername'];
            $gender = $row['gender'];
            $age = $row['age'];
            $address = $row['address'];
            $contactno = $row['contactno'];
            $licenseno = $row['licenseno'];
            $dob = $row['dob'];
            $referencename = $row['referencename'];
            $referenceno = $row['referenceno'];
            $driverimage = $row['driverimage'];
            $driverid = $row['driverid'];
        }

?>




        <div class="content-main">
            <h3>Update Driver</h3>

            <div class="container container-stl">

                <form action="" method="POST">

                    <div class="row">
                        <div class="col">

                            <br>

                            <input type="hidden" name="driverid" class="form-control" value="<?php echo $driverid; ?>">
                            <br>

                            <label for="" class="form-label">Driver Name</label>
                            <input type="text" class="form-control" name="drivername" value="<?php echo $drivername; ?>"><br>

                            <label for="" class="form-label">Gender</label>
                            
                            <select class="form-control" name="gender">
                                <option value="Male" <?php if($gender == 'male'){ echo "selected";} ?>>Male</option>
                                <option value="Female" <?php if($gender == 'female'){ echo "selected";} ?>>Female</option>
                                <option value="Others" <?php if($gender == 'others'){ echo "selected";} ?>>Others</option>
                            </select><br>          

                            <label for="" class="form-label">Age</label>
                            <input type="text" class="form-control" name="age" value="<?php echo $age; ?>"><br>

                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>"><br>

                            <label for="" class="form-label">Contact No</label>
                            <input type="text" class="form-control" name="contactno" value="<?php echo $contactno; ?>"><br>

                            <label for="" class="form-label">License No</label>
                            <input type="text" class="form-control" name="licenseno" value="<?php echo $licenseno; ?>"><br>

                            <label for="" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>"><br>

                            <label for="" class="form-label">Reference Name</label>
                            <input type="text" class="form-control" name="referencename" value="<?php echo $referencename; ?>"><br>

                            <label for="" class="form-label">Reference No</label>
                            <input type="text" class="form-control" name="referenceno" value="<?php echo $referenceno; ?>"><br>

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
                            <input type="file" class="form-control" name="driverimage" value="<?php echo $driverimage; ?>"><br>
                        

                        

                            <br><br>
                            <input type="submit" value="Update" name="update" class="btn btn-info">
                            <a type="button" class="btn btn-secondary" href="view-driver.php">Vew All Driver Details >></a>
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