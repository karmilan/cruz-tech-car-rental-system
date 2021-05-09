<?php include 'includes/dbconfig.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
include "includes/dbconfig.php";

if (isset($_POST['update'])) {
    $expenseid = $_POST['expenseid'];
    $expensename = $_POST['expensename'];
    $expenseamount = $_POST['expenseamount'];
    $expensedate = $_POST['expensedate'];
    $remark = $_POST['remark'];
    $branch = $_POST['branch'];


    $sql = "UPDATE `expense` SET `expensename`='$expensename', `expenseamount`='$expenseamount', `expensedate`='$expensedate', `remark`='$remark', `branch`='$branch' WHERE `expenseid`='$expenseid'";

    $result = $dbconn->query($sql);

    if ($result == TRUE) {
        echo '<script>alert("Mechanic Updated Successfully")</script>';
    } else {
        echo "Error:" . $sql . "<br>" . $dbconn->error;
    }
}


if (isset($_GET['expenseid'])) {
    $expenseid = $_GET['expenseid'];

    $sql = "SELECT * FROM `expense` WHERE `expenseid`='$expenseid'";

    $result = $dbconn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $expenseid = $row['expenseid'];
    $expensename = $row['expensename'];
    $expenseamount = $row['expenseamount'];
    $expensedate = $row['expensedate'];
    $remark = $row['remark'];
    $branch = $row['branch'];
        }

?>




        <div class="content-main">
            <h3>Update Expense</h3>

            <div class="container container-stl">

                <form action="" method="POST">

                    <div class="row">
                        <div class="col">

                            <br>

                            <input type="hidden" name="expenseid" class="form-control" value="<?php echo $expenseid; ?>">
                            <br>

               <label for="" class="form-label">Expense Name</label>
               <input type="text" class="form-control" name="expensename" value="<?php echo $expensename; ?>"><br>

               <label for="" class="form-label">Expense Amount</label>
               <input type="text" class="form-control" name="expenseamount" value="<?php echo $expenseamount; ?>"><br>

               <label for="" class="form-label">Expense Date</label>
               <input type="date" class="form-control" name="expensedate" value="<?php echo $expensedate; ?>"><br>

               <label for="" class="form-label">Remark</label>
               <input type="text" class="form-control tfield" name="remark" value="<?php echo $remark; ?>"><br>

               <label for="" class="form-label">Branch</label>
               <input type="text" class="form-control tfield" name="branch" value="<?php echo $branch; ?>">

                            <br><br>
                            <input type="submit" value="Update" name="update" class="btn btn-info">
                            <a type="button" class="btn btn-secondary" href="view-expense.php">Vew All Expense Details >></a>
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