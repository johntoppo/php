<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con , "select uname from admin where uname = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['uname'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
   }
?>