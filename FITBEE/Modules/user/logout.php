<?php 
session_start(); 
unset($_SESSION['uid']);
echo "<script>window.location='../login.php'</script>";
?>
