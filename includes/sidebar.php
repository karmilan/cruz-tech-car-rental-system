<?php include "includes/dbconfig.php";?>
<?php include "includes/header.php";?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
        font-family: "Lato", sans-serif;
    }
    </style>
</head>

<body>
    <div class="sidebar">

        <div class="sidenav">

            <img src="../../cruz-tech-car-rental-system/client/images/TUCKTUCKPNG.png" class="float-left" style="width: 14rem;
    margin-left: -26px;
    margin-top: -70px; height: 100px;
    object-fit: cover;">
            <hr>

            <a class="btn-sm" href="index.php"><i class="fa fa-fw fa-tachometer"></i>Home</a>
            <a class="btn-sm" href="add-car.php"><i class="fa fa-car" aria-hidden="true"></i>
                Car</a>

            <button class="dropdown-btn btn-sm"><i class="fa fa-fw fa-users"></i>Customer
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="add-customer.php">Manage Customers</a>
                <a href="view-customer.php">Customer's History</a>

            </div>

            <button class="dropdown-btn"><i class="fa fa-fw fa-road"></i>Driver
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="add-driver.php">Driver Master</a>
                <a href="view-driver.php">Driver History</a>
                <a href="update-driver-amount.php?da_id=1; ?>">Driver Amount</a>

            </div>

            <button class="dropdown-btn"><i class="fa fa-fw fa-inbox"></i>Inquiries
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="view-inquiry-self-driving.php">Self Driving</a>
                <a href="view-inquiry-with-driver.php">With Driver</a>
            </div>

            <button class="dropdown-btn"><i class="fa fa-fw fa-book"></i>Booking
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="car-booking.php">Book a Car</a>
                <!-- <a href="view-inquiry.php">Inquiries</a> -->
                <a href="view-booking.php">Booking History</a>

            </div>

            <button class="dropdown-btn"><i class="fa fa-fw fa-retweet"></i>Return Cars
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="view-return.php">Return Car</a>
                <a href="view-return-with-driver.php">Return With Driver</a>
                <a href="view-return-history.php">Return History</a>

            </div>

            <!-- <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Maintenance
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
            </div> -->

            <!-- <button class="dropdown-btn" href="http://localhost/car-rental/add-mechanic.php"><i class="fa fa-fw fa-home"></i>Mechanic 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div> -->

            <a href="add-mechanic.php"><i class="fa fa-fw fa-wrench"></i>Mechanic</a>


            <button class="dropdown-btn"><i class="fa fa-fw fa-credit-card"></i>Insurance
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="add-insurance.php">Manage Insurance</a>
                <a href="#">Insurance History</a>

            </div>

            <a href="view-profit2.php"><i class="fa fa-fw fa-money"></i>Profit</a>

            <button class="dropdown-btn"><i class="fa fa-fw fa-briefcase"></i>Expense
                <i class="fa fa-caret-down"></i>
            </button>


            <div class="dropdown-container">
                <a href="add-expense.php">Manage Expense</a>
                <a href="#">Expense History</a>
            </div>

            <?php
                    include "includes/dbconfig.php";

                    $sql = "SELECT * FROM user where username = '$user_check' and role='admin'";

                    $result = $dbconn->query($sql);


                    ?>

                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>

            <a href="adduser.php"><i class="fa fa-fw fa-user"></i>Users</a>

            <?php        }
                    }
                    ?>

            <button class="dropdown-btn"><i class="fa fa-fw fa-file-text"></i>Reports
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="reports/return-history-report.php">Return Details Report</a>
                <a href="reports/profit-report.php">Profit Report</a>
                <a href="#">Link 3</a>
            </div>



        </div>

        <div class="main">

        </div>
    </div>
    <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
    </script>

</body>

</html>