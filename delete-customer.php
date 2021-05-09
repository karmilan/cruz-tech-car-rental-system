<?php 
include "includes/dbconfig.php";

if (isset($_GET['cust_id'])) {
	$cust_id = $_GET['cust_id'];

	$sql = "DELETE FROM `customer` WHERE `cust_id`='$cust_id'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo '<script>alert("Customer Deleted Successfuly")
		window.location = "view-customer.php";
		</script>';
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>