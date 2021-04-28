<?php 
include "includes/dbconfig.php";

if (isset($_GET['driverid'])) {
	$driverid = $_GET['driverid'];

	$sql = "DELETE FROM `driver` WHERE `driverid`='$driverid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo '<script>alert("Driver Deleted Successfully")</script>';
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>