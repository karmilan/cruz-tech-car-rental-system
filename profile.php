<?php include('session.php'); ?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<?php include "includes/dbconfig.php"; ?>

<?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM user where username = '$user_check'";

$result = $dbconn->query($sql);


?>


<div class="content-main">
    <h2>User Details</h2>
    <div class="container container-stl"><br>

        <?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

       <div class="card">
           <div class="card-body">
        
                <h3> Full Name: <?php echo $row['fullname']; ?></h3>
                <h3> Email: <?php echo $row['email']; ?></h3>
                <h3> Phone No: <?php echo $row['phno']; ?></h3>
                <h3> User Name: <?php echo $row['username']; ?></h3>
                
                <a class="btn btn-info" href="updateuser.php?userid=<?php echo $row['userid']; ?>">Edit</a>
                &nbsp;<a class="btn btn-danger" href="deleteuser.php?userid=<?php echo $row['userid']; ?>">Delete
                    Account</a>


            </div>
        </div>

        <?php		}
			}
		?>
<br>
    </div>
</div>


<?php include 'includes/footer.php'; ?>