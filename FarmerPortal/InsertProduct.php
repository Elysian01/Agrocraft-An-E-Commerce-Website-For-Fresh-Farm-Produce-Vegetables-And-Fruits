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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">


    <title>Farmer - Insert Product</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center font-weight-bold">Insert Your New Product <i class="fas fa-leaf"></i></h4>
                            </div>
                            <div class="card-body">

                                <form name="my-form" action="InsertProduct.php" method="post" enctype="multipart/form-data">

                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Title:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="product_title" placeholder="Enter Product title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Stock:(In kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="product_stock" placeholder="Enter Product Stock" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_name" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Categories:</label>
                                        <div class="col-md-6">
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
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product type :</label>
                                        <div class="col-md-6">
                                            <input type="text" id="phone_number" class="form-control" name="product_type" placeholder="Example . potato" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Expiry :</label>
                                        <div class="col-md-6">
                                            <input id="present_address" class="form-control" type="date" name="product_expiry" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Image :</label>
                                        <div class="col-md-6">
                                            <input id="permanent_address" type="file" name="product_image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product MRP : (Per kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number" class="form-control" name="product_price" placeholder="Enter Product price" required>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                        <label for="nid_number1" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Base Price:(Per kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number1" class="form-control" name="product_baseprice" placeholder="Enter Product base price" required>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label for="nid_number2" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder"> Product Description:</label>
                                        <div class="col-md-6">
                                            <textarea name="product_desc" id="nid_number2" class="form-control" name="product_desc" rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number3" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Keywords:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number3" class="form-control" name="product_keywords" placeholder="Example best potatos" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number4" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Delivery :</label>
                                        <div class="col-md-6">
                                            <input type="radio" id="nid_number4" name="product_delivery" value="yes" />Yes
                                            <input type="radio" id="nid_number4" name="product_delivery" value="no" />No
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="insert_pro">
                                            INSERT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>

    <body>

</html>


<?php
if (isset($_POST['insert_pro'])) {    // when button is clicked

    // getting the text data from fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_type = $_POST['product_type'];
    $product_stock = $_POST['product_stock'];
    $product_price = $_POST['product_price'];
    $product_expiry = $_POST['product_expiry'];
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
        $insert_product = "insert into products (farmer_fk,product_title, product_cat, 
                                product_type,product_expiry,product_image, product_stock, product_price,
                                product_desc,  product_keywords, product_delivery) 
                                values ('$id','$product_title','$product_cat','$product_type','$product_expiry','$product_image','$product_stock',
                                        '$product_price','$product_desc',
                                        '$product_keywords','$product_delivery')";

        $insert_query = mysqli_query($con, $insert_product);
        echo $insert_product;
        if ($insert_query) {
            echo "<script>alert('Product has been added')</script>";
            echo "<script>window.open('farmerHomepage.php','_self')</script>";
        } else {
            echo "<script>alert('Error Uploading Data Please Check your Connections ')</script>";
        }
    }
}


?>