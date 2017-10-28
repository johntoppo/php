<?php
   include('conn.php');
   include('session.php');
   include('header.php');
  ?> 

<html>
   
   <head>
      <title>Welcome  teacher page </title>
   </head>
   <style>
       table, th, td {
                        border: 1px solid black;
                     }
     </style>                
   
   <body>
      <h1> Welcome To Teacher page <?php echo $login_session; ?></h1> 
      <h2><a href = "../index.php">Sign Out</a></h2>


   <fieldset>
  
   <legend>Teacher Information</legend>  
  
  <?php

   $sql = "SELECT tname,tpass FROM teacher";
   $result = $con->query($sql);

if ($result->num_rows > 0) {

   echo "<table>   <tr><th>  username </t>  </th><th>  password  </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["tname"]."</td><td>".$row["tpass"]."</td></tr>";
    }
    echo "</table>";
 }
  
    else {
    echo "0 results";
 }
?> 
 </fieldset> 

 <fieldset>    
 <legend>Student Information</legend>  

 <?php
   $sql = "SELECT username,password FROM user";
   $result = $con->query($sql);

if ($result->num_rows > 0) 

{
   echo "<table>   <tr><th>  username </t>  </th><th>  password  </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       

        echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
 }

    else {
    echo "0 results";
 }
?>

 </fieldset> 

   </body>
   <form>
      <input type ="button" name="button" value="clickme">
   </form>
   
</html>