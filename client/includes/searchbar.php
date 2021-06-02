<!-- search -->

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM mechanic";
if( isset($_GET['search']) ){
    $mechanicname = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));
	$companyname = mysqli_real_escape_string($dbconn, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM mechanic WHERE mechanicname ='$mechanicname' or companyname ='$companyname'";
}

$result = $dbconn->query($sql);

?>


<div class="row">
  <div class="col-12 mt-1 col-centered">

    <div class="input-group ">
      <input type="text" class="form-control" placeholder="Category">
      <input type="text" class="form-control" placeholder="Car Type">
      <input type="text" class="form-control" placeholder="Seating Capacity">
      <div class="input-group-append">
        <button class="btn btn-danger" type="button">Find</button>
      </div>
    </div>

  </div>
</div>