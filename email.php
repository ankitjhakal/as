<?php
session_start();
if(isset($_GET['q'])){
  $a=$_GET['q'];
  header ("location: $a.php");
}
 if(!isset($_SESSION['user1']))
 {
   header('location: seventask.php');
 }
 //validation for email
 else {
   if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
     echo "email is not valid" ;
     include('first.php');
   }
   else {
     echo "<br>" .$email." ";
   }

   echo "<br><a href=/logout.php>logout</a>";
 }
