<?php 
session_start(); 
unset($_SESSION['ad']);
echo "<script>window.location='../adminlogin.php'</script>";
?>
