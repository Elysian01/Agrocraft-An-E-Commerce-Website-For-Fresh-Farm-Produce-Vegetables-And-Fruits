<?php
if (isset($_SESSION['phonenumber'])) {
echo "../FarmerPortal/FarmerProfile.php";
}
else {
echo "../auth/FarmerLogin.php";
}
?>