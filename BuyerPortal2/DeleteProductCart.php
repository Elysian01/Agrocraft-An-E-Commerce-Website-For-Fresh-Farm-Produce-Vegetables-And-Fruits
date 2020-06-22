<?php
include("../Functions/functions.php");
$sess_phone_number = $_SESSION['phonenumber'];
if (isset($_GET['id'])) {
     $product_id = $_GET['id'];
     $delete_product = "delete from cart where  product_id = '$product_id' and phonenumber = '$sess_phone_number'";
     $run_delete = mysqli_query($con, $delete_product);

     echo "<script>window.open('CartPage.php','_self')</script>";
}
