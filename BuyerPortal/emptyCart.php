<?php
include("../Functions/functions.php");

global $con;
$sess_phone_number = $_SESSION['phonenumber'];

$get_items = "Delete from cart where phonenumber = '$sess_phone_number'";
$run_items =  mysqli_query($con, $get_items);

echo "<script>window.open('CartPage.php','_self')</script>"
?>