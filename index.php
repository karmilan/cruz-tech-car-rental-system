<?php include "includes/header.php"; ?>


<?php
include "includes/dbconfig.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 

   $username = mysqli_real_escape_string($dbconn, $_POST['username']);
   $pass = mysqli_real_escape_string($dbconn, $_POST['pass']);

   // $username = $_POST['username'];
   // 		$pass = $_POST['pass'];

   $sql = "SELECT userid FROM user WHERE username = '$username' and pass = '$pass'";
   $result = mysqli_query($dbconn, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   // $active = $row['active'];

   $count = mysqli_num_rows($result);

   // If result matched $myusername and $mypassword, table row must be 1 row

   if ($count == 1) {
      // session_register("username");

      session_start();
      //session_start("username");
      $_SESSION['login_user'] = $username;

      header("location: dashboard.php");
   } else {
      echo '<script>alert("invalid User Name or Paaword")</script>';
   }
}
?>

<!-- 
<style type="text/css">
   body {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 14px;
   }

   label {
      font-weight: bold;
      width: 100px;
      font-size: 14px;
   }

   .box {
      border: #666666 solid 1px;
   }
</style>

<body bgcolor="#FFFFFF">

   <div align="center">
      <div style="width:300px; border: solid 1px #333333; " align="left">
         <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

         <div style="margin:30px">

            <form action="" method="post">
               <label>UserName :</label><input type="text" name="username" class="box" /><br /><br />
               <label>Password :</label><input type="password" name="pass" class="box" /><br /><br />
               <input type="submit" value=" Submit " /><br />
            </form>


         </div>

      </div>

   </div>
</body> -->


   <!-- bootstrap login -->
   <div class="login-body">
      <div class="container">
         <div class="row">
            <div class="col-4">

               <form method="post" class="box">
                  <div class="form-group">
                     <h1>ADMIN LOGIN</h1>
                     <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="User Name" name="username">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control"  placeholder="Password" name="pass">
                  </div>
                  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
               </form>

            </div>
         </div>
      </div>
   </div>
   <!-- end bootstrap login -->

