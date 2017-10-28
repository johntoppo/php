<?php
   include('session.php');
   include('header.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
   
         <h1>Welcome To Student Page <?php echo $login_session; ?></h1> 
      <h2><a href = "../index.php">Sign Out</a></h2>
   </body>
   
</html>