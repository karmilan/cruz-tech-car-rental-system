<?php 
include "includes/dbconfig.php";

if (isset($_GET['insuranceid'])) {
	$insuranceid = $_GET['insuranceid'];

	$sql = "DELETE FROM `insurance` WHERE `insuranceid`='$insuranceid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo '<script>alert("Insurance Deleted Successfully")
		window.location = "view-insurance.php";
		</script>';
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>