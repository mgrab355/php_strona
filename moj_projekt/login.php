<?php
include("cfg.php");
session_start();

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $myusername = mysqli_real_escape_string($link, $_POST['username']);
   $mypassword = mysqli_real_escape_string($link, $_POST['password']);

   $sql = "SELECT id FROM `users` WHERE username = '$myusername' and pass = '$mypassword'";
   $result = mysqli_query($link, $sql);
   if ($result) {

      $row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);
      if ($count == 1) {
         $_SESSION['login_user'] = $myusername;

         header("location: cms.php");
      }
   } else if(0){
      $error = "Your Login Name or Password is invalid";
      header("location: home.php");
   }
}
?>
<html>

<head>
   <title>Login Page</title>

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

</head>

<body bgcolor="#FFFFFF">

   <div align="center">
      <div style="width:300px; border: solid 1px #333333; " align="left">
         <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

         <div style="margin:30px">

            <form action="" method="post">
               <label>UserName :</label><input type="text" name="username" class="box" /><br /><br />
               <label>Password :</label><input type="password" name="password" class="box" /><br /><br />
               <input type="submit" value=" Submit " /><br />
            </form>

            <div style="font-size:11px; color:#cc0000; margin-top:10px">
               <?php if ($error) {
                  echo $error;
               } ?>
            </div>

         </div>

      </div>

   </div>

</body>

</html>