<?php include 'header.php';?>


<style>
    .notifybtn{
        margin: auto 8rem;
        background: none;
    border: none;
    color: aliceblue;
    outline: none;
    }

    span.badge.bg-danger {
    /* padding: 0px; */
    font-size: x-small;
    left: 2rem;
}

</style>

<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Cars</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="notification.php">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adduser.php">User</a>
                    </li> -->

                    <!-- Notifications -->

                    <li class="nav-item">

                        <?php
                        include "includes/dbconfig.php";

                        $sql = "SELECT * FROM booking where status='pending' ORDER BY bookingtime DESC;";

                        $result = mysqli_query($dbconn, $sql);

                        if ($result) {
                            $row = mysqli_num_rows($result);

                            if ($row) {
                            }
                            mysqli_free_result($result);
                        }

                        $result = $dbconn->query($sql);
                        ?>

                        <div class="dropdown">
                            <button class="btn-lg notifybtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="outline: none;">
                                <i class="fa fa-bell" aria-hidden="true">
                                <span class="badge bg-danger"><?php echo $row ?></span>
                                </i>
                            </button>
                            <ul class="dropdown-menu" >

                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <div class="dropdown-divider"></div>
                                        <li><a class="dropdown-item" href="#">Car:<?php echo $row['car_name']; ?> is booked by <?php echo $row['cust_name']; ?> <?php echo $row['bookingtype']; ?> at <?php echo $row['bookingtime']; ?></a></li>

                                <?php        }
                                }
                                ?>

                            </ul>
                        </div>


                    </li>
                    <!-- Notifications End -->


                </ul>
            </div>
            <!-- <a type="button" class="btn btn-outline-info" href="logout.php">Logout</a> -->


            <div class="dropdownbtn" style="position: relative;">
                <a class="nav-link dropdown-toggle btn btn-lg" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                    <?php
                    include "includes/dbconfig.php";

                    $sql = "SELECT * FROM user where username = '$user_check' and role='admin'";

                    $result = $dbconn->query($sql);


                    ?>

                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>

                            <a class="dropdown-item" href="updateuser.php?userid=<?php echo $row['userid']; ?>">Profile</a>


                    <?php        }
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