<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div>
        <?php 
            include("includes/db.php");
            include("Functions/functions.php");
            $sess_phone_number=$_SESSION['phonenumber'];    
            getProductDetails();


        ?>
    </div>
</body>
</html>