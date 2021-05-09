<?php 
include "includes/dbconfig.php";

if (isset($_GET['expenseid'])) {
	$expenseid = $_GET['expenseid'];

	$sql = "DELETE FROM `expense` WHERE `expenseid`='$expenseid'";


	$result = $dbconn->query($sql);

	if ($result == TRUE) {
		echo '<script>alert("Expense Deleted Successfully")
		window.location = "view-expense.php";
		</script>';
	}else{
		echo "Error:" . $sql . "<br>" . $dbconn->error;
	}
}

?>