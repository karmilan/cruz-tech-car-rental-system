<?php include "includes/header.php"; ?>

<?php 
include "includes/dbconfig.php";

if (isset($_GET['bookingid'])) {
	$bookingid = $_GET['bookingid'];

	$sql = "DELETE FROM `booking` WHERE `bookingid`='$bookingid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo '<script>alert("Booking Deleted Successfuly")</script>';
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>

<?php include "view-booking.php"; ?>
