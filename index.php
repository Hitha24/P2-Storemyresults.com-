<?php session_start(); ?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
          <?php
               if(isset($_SESSION['status']))
               {
                   echo $_SESSION['email']; 
                   echo $_SESSION['status'];
                   unset($_SESSION['status']);
               }
            ?>
      <h1>Welcome </h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>