<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['update'])) {
    $mechanicid = $_POST['mechanicid'];
    $companyname = $_POST['companyname'];
    $mechanicname = $_POST['mechanicname'];
    $contactno = $_POST['contactno'];
    $companyaddress = $_POST['companyaddress'];


    $sql = "UPDATE `mechanic` SET `companyname`='$companyname', `mechanicname`='$mechanicname', `contactno`='$contactno', `companyaddress`='$companyaddress' WHERE `mechanicid`='$mechanicid'";

    $result = $dbconn->query($sql);

    if ($result == TRUE) {
        echo '<script>alert("Mechanic Updated Successfully")</script>';
    } else {
        echo "Error:" . $sql . "<br>" . $dbconn->error;
    }
}


if (isset($_GET['mechanicid'])) {
    $mechanicid = $_GET['mechanicid'];

    $sql = "SELECT * FROM `mechanic` WHERE `mechanicid`='$mechanicid'";

    $result = $dbconn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $mechanicid = $row['mechanicid'];
            $companyname = $row['companyname'];
            $mechanicname = $row['mechanicname'];
            $contactno = $row['contactno'];
            $companyaddress = $row['companyaddress'];
        }

?>




        <div class="content-main">
            <h3>Update Mechanic</h3>

            <div class="container container-stl">

                <form action="" method="POST">

                    <div class="row">
                        <div class="col">

                            <br>

                            <input type="hidden" name="mechanicid" class="form-control" value="<?php echo $mechanicid; ?>">
                            <br>

                            <label for="" class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="companyname" value="<?php echo $companyname; ?>"><br>

                            <label for="" class="form-label">Mechanic Name</label>
                            <input type="text" class="form-control" name="mechanicname" value="<?php echo $mechanicname; ?>"><br>

                            <label for="" class="form-label">Contact No</label>
                            <input type="text" class="form-control" name="contactno" value="<?php echo $contactno; ?>"><br>

                            <label for="" class="form-label">Company Address</label>
                            <input type="text" class="form-control tfield" name="companyaddress" value="<?php echo $companyaddress; ?>"><br>




                            <br><br>
                            <input type="submit" value="Update" name="update" class="btn btn-info">
                            <a type="button" class="btn btn-secondary" href="view-mechanic.php">Vew All Mechanic Details >></a>
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