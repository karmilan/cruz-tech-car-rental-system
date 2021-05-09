<?php include('session.php'); ?>
<?php include "includes/dbconfig.php"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php


if (isset($_POST['submit'])) {
   $expensename = $_POST['expensename'];
   $expenseamount = $_POST['expenseamount'];
   $expensedate = $_POST['expensedate'];
   $remark = $_POST['remark'];
   $branch = $_POST['branch'];


   $sql = "INSERT INTO `expense`(`expensename`,`expenseamount`, `expensedate`, `remark`,`branch`) VALUES ('$expensename','$expenseamount','$expensedate','$remark','$branch')";


   $result = $dbconn->query($sql);

   if ($result == TRUE) {
      echo '<script>alert("New Expense Added Successfully")</script>';
   } else {
      echo "Error insertttt:" . $sql . "<br>" . $dbconn->error;
   }


   mysqli_close($dbconn);
}

?>

<div class="content-main">
   <h3>Add Expense</h3>

   <div class="container container-stl">

      <form action="" method="POST" enctype="multipart/form-data">

         <div class="row">
            <div class="col">

               <br>
               <label for="" class="form-label">Expense Name</label>
               <input type="text" class="form-control" name="expensename"><br>

               <label for="" class="form-label">Expense Amount</label>
               <input type="text" class="form-control" name="expenseamount"><br>

               <label for="" class="form-label">Expense Date</label>
               <input type="date" class="form-control" name="expensedate"><br>

               <label for="" class="form-label">Remark</label>
               <input type="text" class="form-control tfield" name="remark"><br>

               <label for="" class="form-label">Branch</label>
               <input type="text" class="form-control tfield" name="branch"><br>

               <input type="submit" name="submit" value="Add" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a type="button" class="btn btn-secondary" href="view-expense.php">Vew All Expense Details >></a><br><br>

            </div>

            
         </div>

      </form>
   </div>

</div>

<?php include 'includes/footer.php'; ?>