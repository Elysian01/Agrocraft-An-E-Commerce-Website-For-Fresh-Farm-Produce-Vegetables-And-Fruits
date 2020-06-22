<!DOCTYPE html>

<?php
include("includes/db.php");  // db connections
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Script for Advance TextArea  -->
    <!-- 
    <script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script type="application/x-javascript">
    tinymce.init({selector:'textarea'});
    </script> -->

    <title>Inserting Product</title>
    <!-- <link rel="stylesheet" type="text/css" href="./Styles/insert_product.css"> -->
</head>

<style>
    body {
        background-image: url(../Images/Website/FarmerLogin.jpg);
        position: relative;
        text-align: center;
        background-size: 30px;
        background-attachment: fixed;
        background-size: cover;
        font-family: 'Times New Roman', Times, serif;
        /* border-collapse: collapse; */
    }


    #insnow {
        
        width: 200px;
        height: 40px;
        background-color: lawngreen;
    }

    #tab {
        font-size: 19px;
        table-layout: fixed;
    }
</style>

<body>

    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <br>
        <table id="tab" align="center" width="600" border=3>
            <tr id="ins" align="center">
                <td colspan=4>
                    <h2>Insert New Product Here</h2>
                </td>
            </tr>



            <tr id="protitle">
                <td align="center"><b>Product Title:</b></td>
                <td colspan=2><input type="text" name="product_title" size="65" required></td>
            </tr>

            <tr id="procat">
                <td align="center"><b>Product Categories:</b></td>
                <td colspan=2>
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
            </tr>

            <tr id="prostock">
                <td align="center"><b>Product type : <br></b></td>
                <td colspan=2><input type="text" name="product_type" required></td>
            </tr>

            <tr id="procalender">
                <td align="center"><b>Product Expiry : <br></b></td>
                <td colspan=2> <input type="date" name="bday"></td>
            </tr>
            <tr id="proimg">
                <td align="center"><b>Product Image :</b></td>
                <td colspan=2><input type="file" name="product_image"></td>
            </tr>

            <tr id="prostock">
                <td align="center"><b>Product Stock : <br>(In kg)</b></td>
                <td colspan=2><input type="text" name="product_stock" required></td>
            </tr>

            <tr id="propriceMax">
                <td align="center"><b>Product MRP : <br>(Per kg)</b></td>
                <td colspan=2><input type="text" name="product_price" required></td>
            </tr>
            <tr id="propriceMin">
                <td align="center"><b>Product Base Price : <br>(Per kg)</b></td>
                <td colspan=2><input type="text" name="product_price" required></td>
            </tr>
            <tr id="prodesc">

                <td align="center"><b>Product Description:</b></td>
                <td colspan=2><textarea name="product_desc" id="" cols="40" rows="8"></textarea></td>
            </tr>

            <tr id="prokey">
                <td align="center"><b>Product Keywords:</b></td>
                <td colspan=2><input type="text" name="product_keywords" size="60"></td>
            </tr>

            <tr id="dev">
                <td align="center"><b>Delivery :</b></td>
                <td id="yes"><input type="radio" name="product_delivery" value="yes">Yes</td>
                <td id="no"><input type="radio" name="product_delivery" value="no">No</td>
            </tr>

            <tr align="center">
                <td colspan=4><input type="submit" id="insnow" name="insert_post" value="Insert Product Now"></td>
            </tr>
        </table>
    </form>

</body>

</html>

<?php
session_start();
if (isset($_POST['insert_post'])) {    // when button is clicked

    // getting the text data from fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_type = $_POST['product_type'];
    $product_stock = $_POST['product_stock'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_delivery = $_POST['product_delivery'];

    // getting image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];  // for server

    if (isset($_SESSION['phonenumber'])) {
        move_uploaded_file($product_image_tmp, "product_images/$product_image");

        $phone = $_SESSION['phonenumber'];
        $getting_id = "select * from farmerregistration where farmer_phone = $phone";
        $run = mysqli_query($con, $getting_id);
        $row = mysqli_fetch_array($run);
        $id = $row['farmer_id'];
        $insert_product = "insert into products (farmer_fk,product_cat,product_title,product_type,product_stock,product_price,
                            product_desc,product_image,product_keywords,product_delivery) 
                            values ('$id','$product_cat','$product_title','$product_type','$product_stock','$product_price'
                                    ,'$product_desc','$product_image','$product_keywords','$product_delivery')";

        $insert_pro = mysqli_query($con, $insert_product);

        if ($insert_pro) {
            echo "<script>alert('Product has been added')</script>";
            echo "<script>window.open('insert_product.php','_self')</script>";
        } else {
            echo "<script>alert('Error Uploading Data Please Check your Connections ')</script>";
        }
    }
}


?>