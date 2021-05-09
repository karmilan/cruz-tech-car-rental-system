<?php
   include('session.php');
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>


<?php
include "includes/dbconfig.php";

$query = "SELECT * FROM car";
      
// Execute the query and store the result set
$result = mysqli_query($dbconn, $query);
  
if ($result)
{
    // it return number of rows in the table.
    $row = mysqli_num_rows($result);
      
       if ($row)
          {
             //printf("Number of row in the table : " . $row);
          }
    // close the result.
    mysqli_free_result($result);
}

// Connection close 
mysqli_close($dbconn);
?>

<div class="content-main">
    <div class="container container-stl"><br>

        <div class="row">

            <div class="col-4">

                <div class="card text-white bg-primary mb-3 dashboard-card" style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h1> <?php echo $row?>
                                </h1>
                                <h4>Available Cars</h4>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-car fa-border" style="border-radius:100%; font-size:46px; margin-top: 14px; margin-left: -10px;" aria-hidden="true"
                                        ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>

    </div><br>
</div>


<?php include 'includes/footer.php'; ?>