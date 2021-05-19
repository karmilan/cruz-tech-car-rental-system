<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addreturn.php">Return</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adduser.php">User</a>
                    </li>

                </ul>
            </div>
            <!-- <a type="button" class="btn btn-outline-info" href="logout.php">Logout</a> -->


            <div class="dropdownbtn" style="position: relative;">
                <a class="nav-link dropdown-toggle btn btn-lg" style="color: white;" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item" href="profile.php">Profile</a> -->

                    <?php include('session.php'); ?>

                    <?php include "includes/dbconfig.php"; ?>

                    <?php 
include "includes/dbconfig.php";

$sql = "SELECT * FROM user where username = '$user_check'";

$result = $dbconn->query($sql);


?>

                    <?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

                    <a class="dropdown-item" href="updateuser.php?userid=<?php echo $row['userid']; ?>">Profile</a>


                    <?php		}
			}
		?>


                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>


        </div>
    </nav>
</header>
<br>
<div class="container">