<?php

session_start();
if ($_SESSION['username'] == NULL) {

   header("Location:signin.php");
   exit();
   //echo "your session is ".$_SESSION['username'];
}
//header("Location:index.php");
//echo "Your Session is =".$_SESSION['username']."NULL";
?>