<?php 
include "includes/dbconfig.php";

if (isset($_GET['carid'])) {
	$carid = $_GET['carid'];

	$sql = "DELETE FROM `car` WHERE `carid`='$carid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo '<script>alert("Car Deleted Successfuly")
		window.location = "view-car.php";
		</script>';
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>