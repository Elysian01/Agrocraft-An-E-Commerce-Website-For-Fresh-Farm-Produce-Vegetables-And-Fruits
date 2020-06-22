<?php
include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>



    <title>Inserting Product</title>





    <style>
        table {
            border: none;
        }


        tr td {
            border: none;
        }

        #protitle {
            font-size: 10px;

        }

        table {
            background-color: white;
            height: 650px;
            width: 100%;
            /* width: 98.5%;
            margin-left: 10px;
            margin-right: 10px; */
        }

        body {
            background-color: white;
        }

        .header {
            /* background-color:   #66ffff;
     */
            font-size: 30px;
            background-color: white;
            color: black;
            text-align: center;
        }

        * {
            box-sizing: border-box;
            margin: 0;
        }

        .col1 {
            font-size: 20px;
            background-color: #f5ca0a;

            border-style: solid;
            border-radius: 10px;
            padding: 10px;
            float: left;
            width: 250px;
            margin-left: 100px;

        }

        select {
            font-size: 20px;
            border-style: solid;
            width: 250px;
            /* margin-left: 40px; */
            border-radius: 10px;
            padding: 10px;
            border-width: 2px;
            border-color: black;

        }

        .col2 {
            float: left;
            margin-left: 20px;

        }

        .text1 {
            font-size: 20px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            border-style: solid;
            padding: 10px;
        }

        .grp2 {
            /* float: left; */
        }

        .col3 {
            background-color: #f5ca0a;

            font-size: 20px;
            border-style: solid;
            border-radius: 10px;
            padding: 10px;
            width: 250px;
            float: left;
            margin-right: 20px;
        }

        .col4 {
            /* margin-left: 20px; */
            float: left;

        }

        .t1 {
            text-align: center;
        }

        .foot {
            text-align: center;
            font-size: 20px;
            border-style: solid;
            border-radius: 10px;
            padding: 10px;
            margin-left: 40%;
            /* float: left; */
            width: 250px;
            background-color: #f5ca0a;

        }

        .footer {
            margin-left: 40%;
            margin-top: 10px;
            text-align: center;
            font-size: 20px;
            border-style: solid;
            border-radius: 10px;
            padding: 10px;
            /* float: left; */
            width: 250px;
            background-color: #f5ca0a;
            /* background-color: white; */
            border-color: black;
            font-weight: bold;
        }

        textarea {
            border-style: solid;
            border-color: black;
            border-width: 2px;
        }

        .inp {
            margin-top: 10px;
            font-size: 30px;
        }

        .danger {
            background-color: #00e600;
            border: 2px solid;
            border-style: outline;
            border-color: yellow;
        }

        .danger:hover {
            font-weight: bolder;
            width: 300px;
            height: 60px;
            transition: .7s;

        }

        .btn {
            border: 2px solid;
            border-style: outline;
            border-color: #f5ca0a;
            color: black;

            cursor: pointer;
            width: 250px;
        }
    </style>
</head>

<body>
    <div class="header">
        <form action="Insertproduct.php" method="post" enctype="multipart/form-data">
            <br>
            <!-- <div class="inp">Insert New Product Here</div> -->
            <div><label style="font-size :50px; text-shadow: 1px 1px 1px gray;"><b>Insert New Product Here</b><i style="padding-left:1%;color:green;" class="fas fa-leaf "></i></label></div>

    </div>
    <br>



    <table>
        <tr id="protitle">
            <td>
                <div class="grp1">
                    <div class="col1 t1"><b> Product Title:</b> </div>

                    <div class="col2"><input class="text1" type="text" name="product_title" required>
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">

                    <div class="col3 t1"><b>Product Stock:(In kg</b>)</div>
                    <div class="col4">
                        <input type="text " class="text1" name="product_stock" required>
                    </div>
            </td>

            </div>

        </tr>

        <tr id="procat">
            <td>
                <div class="grp1">
                    <div class="col1 t1">
                        <b> Product Categories:</b></div>
                    <div class="col2">
                        <select name="product_cat" required>
                            <option>Select a Category</option>
                            <?php
                            $get_cats = "select * from categories";

                            $run_cats =  mysqli_query($con, $get_cats);

                            while ($row_cats = mysqli_fetch_array($run_cats)) {

                                $cat_id = $row_cats['cat_id'];
                                $cat_title = $row_cats['cat_title'];

                                echo "<option value='$cat_id'>$cat_title</option>";
                            }
                            ?>
                        </select>
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">

                    <div class="col3 t1"><b> Product type :</b> </div>
                    <div class="col4"> <input type="text" class="text1" name="product_type" required>
                    </div>
            </td>
            </div>
        </tr>

        <tr id="procalender">
            <td>
                <div class="grp1">
                    <div class="col1 t1"><b>Product Expiry :</b></div>
                    <div class="col2">
                        <input type="date" class="text1" name="bday">
            </td>
            </div>

            </div>
            <td>
                <div class="grp2">
                    <div class="col3 t1">
                        <b> Product Image :</b> </div>
                    <div class="col4">
                        <input type="file" class="text1" name="product_image">
            </td>
            </td>
            </div>

            </div>


        <tr id="proprice">
            <td>
                <div class="grp1">
                    <div class="col1 t1"><b> Product MRP : (Per kg) </b></div>
                    <div class="col2">
                        <input type="text" class="text1" name="product_mrp" required>
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">
                    <div class="col3 t1"> <b>Product Base Price:(Per kg) </b></div>
                    <div class="col4">

                        <input type="text" class="text1" name="product_baseprice" required>
            </td>
            </td>
            </div>
            </div>


        <tr id="prodesc">
            <td>
                <div class="grp1">
                    <div class="col1 t1">

                        <b> Product Description:</b> </div>
                    <div class="col2">
                        <textarea name="product_desc" class="text1" cols="40" rows="8"></textarea>
            </td>
            </div>
            </div>

            <td>
                <div class="grp2">
                    <div class="col3 t1"><b> Product Keywords:</b> </div>

                    <div class="col4"> <input type="text" class="text1" name="product_keywords" size="60">
            </td>
            </td>
            </div>
            </div>
    </table>

    <div class="foot">
        <b> Delivery :</b>
        <input type="radio" class="yes" name="product_delivery" value="yes"/>Yes
        <input type="radio" class="yes" name="product_delivery" value="no"/>No
    </div>
    <!-- <div class="footer"> -->
    <button class="footer btn danger" id="insnow" name="insert_pro">
            Insert Product Now <i style="color: #f5ca0a;" class="fas fa-shopping-bag"></i></button>
    </form>

</body>

</html>

<?php
if (isset($_POST['insert_pro'])) {    // when button is clicked

    // getting the text data from fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_type = $_POST['product_type'];
    $product_stock = $_POST['product_stock'];
    $product_mrp = $_POST['product_mrp'];
    $product_baseprice = $_POST['product_baseprice'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_delivery = $_POST['product_delivery'];

    // getting image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];  // for server

    if (isset($_SESSION['phonenumber'])) {
        move_uploaded_file($product_image_tmp, "../Admin/product_images/$product_image");

        $phone = $_SESSION['phonenumber'];
        $getting_id = "select * from farmerregistration where farmer_phone = $sessphonenumber";
        $run = mysqli_query($con, $getting_id);
        $row = mysqli_fetch_array($run);
        $id = $row['farmer_id'];
        $insert_product = "insert into products (farmer_fk, product_cat, product_title,
                                product_type, product_stock, product_mrp, product_baseprice,
                                product_desc, product_image, product_keywords, product_delivery) 
                                values ('$id','$product_cat','$product_title','$product_type','$product_stock',
                                        '$product_mrp','$product_baseprice','$product_desc',
                                        '$product_image','$product_keywords','$product_delivery')";

        $insert_query = mysqli_query($con, $insert_product);
        echo $insert_product;
        if ($insert_query) {
            echo "<script>alert('Product has been added')</script>";
            echo "<script>window.open('Homepage.php','_self')</script>";
        } else {
            echo "<script>alert('Error Uploading Data Please Check your Connections ')</script>";
        }
    }
}


?>