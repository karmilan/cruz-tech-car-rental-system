


<?php
include "includes/dbconfig.php";

$query = "SELECT * FROM car";

// Execute the query and store the result set
$result = mysqli_query($dbconn, $query);

if ($result) {
    // it return number of rows in the table.
    $row = mysqli_num_rows($result);

    if ($row) {
        //printf("Number of row in the table : " . $row);
    }
    // close the result.
    mysqli_free_result($result);
}

// Connection close 
mysqli_close($dbconn);
?>


<button type="button" class="btn btn-primary">
  Notifications <span class="badge bg-secondary"><?php echo $row ?></span>
</button>

