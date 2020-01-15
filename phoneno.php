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
 // validation for phone no
 else{
   if(preg_match("[0-9]",$pno)){
     echo "only numbers r allow" ;
     include('first.php');
   }
   else {
     echo "<i>+91" .$pno."";
   }

   echo "<br><a href=/logout.php>logout</a>";
 }
