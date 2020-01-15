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
 // task 3 split words in taxtarea
 else{

    $data=$_POST['comment'];
   $data1= explode("\n", $data);

   echo "<table><tr><th>subject</th><th>marks</th></tr></table>";
   foreach($data1 as $key)
   {
     $data2= explode("|", $key);

   foreach($data2 as $key)
   {
     echo"<tr>$key</tr>";
   }
   echo "<br>";
   }

   echo "<br><a href=/logout.php>logout</a>";
 }
