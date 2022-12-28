<?php 
session_start();
session_destroy();
header('location:../userlayout/index.php'); 

?>