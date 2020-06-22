<?php

session_start();

session_destroy();

echo "<script>window.open('../BuyerPortal2/bhome.php','_self')</script>";
