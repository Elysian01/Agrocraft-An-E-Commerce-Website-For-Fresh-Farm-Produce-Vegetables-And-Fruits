<?php
if (isset($_SESSION['phonenumber'])) {
echo "../BuyerPortal/BuyerProfile.php";
}
else {
echo "../auth/BuyerLogin.php";
}
?>