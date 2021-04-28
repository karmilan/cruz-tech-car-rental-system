<?php 
include "includes/dbconfig.php";?>

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
  <a href="http://localhost/car-rental/home.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="http://localhost/car-rental/add-car.php"><i class="fa fa-car" aria-hidden="true"></i>
Car</a>

<button class="dropdown-btn"><i class="fa fa-fw fa-user"></i>Customer 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="add-customer.php">Manage Customers</a>
    <a href="#">Customer's History</a>
    
  </div>

  <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Driver 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="http://localhost/car-rental/add-driver.php">Driver Master</a>
    <a href="#">Driver History</a>
    
  </div>

  <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Booking 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="http://localhost/car-rental/car-booking.php">Book a Car</a>
    <a href="#">Booking History</a>
    
  </div>

  <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Maintenance 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

  <!-- <button class="dropdown-btn" href="http://localhost/car-rental/add-mechanic.php"><i class="fa fa-fw fa-home"></i>Mechanic 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div> -->

  <a href="http://localhost/car-rental/add-mechanic.php"><i class="fa fa-fw fa-home"></i>Mechanic</a>


  <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Insurance 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="http://localhost/car-rental/add-insurance.php">Manage Insurance</a>
    <a href="#">Insurance History</a>
    
  </div>

  <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Traffic-Fine 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

  <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Expense 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

  <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Reports 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
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
