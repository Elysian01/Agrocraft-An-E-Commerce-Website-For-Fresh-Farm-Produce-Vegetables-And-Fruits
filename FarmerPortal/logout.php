<?php

session_start();

session_destroy();

echo "<script>window.open('../FarmerPortal/farmerHomepage.php','_self')</script>";


?>