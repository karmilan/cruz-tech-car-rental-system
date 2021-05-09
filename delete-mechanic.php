<?php 
include "includes/dbconfig.php";

if (isset($_GET['mechanicid'])) {
	$mechanicid = $_GET['mechanicid'];

	$sql = "DELETE FROM `mechanic` WHERE `mechanicid`='$mechanicid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo '<script>alert("Mechanic Deleted Successfully")
		window.location = "view-insurance.php";
		</script>';
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>