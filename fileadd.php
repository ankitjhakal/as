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
 // save file on browser and memory
 else{
   $myfile =fopen("ankit/testfile.doc", "w");
  $data3= $fname." ".$lname."\n".$pno."\n".$email;
  fwrite($myfile,$data3);
  fclose($myfile);

  echo "<br><a href=/logout.php>logout</a>";
 }
