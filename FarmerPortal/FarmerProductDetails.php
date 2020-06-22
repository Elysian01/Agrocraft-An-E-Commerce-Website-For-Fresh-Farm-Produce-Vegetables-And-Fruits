<?php
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>AgroCraft</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>
     <style>
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               float: left;
               margin-left: 50px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .dropdown {
               float: right;
               margin-right: 35px;
               margin-top: 20px;

          }

          .options {
               color: yellow;
               margin-left: 20px;
               /* width: 25px; */
               margin-right: 50px;
               display: inline;
          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;

          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               margin-left: 15%;
               height: 50px;
               width: 80%;
          }

          .makeitgreen {
               color: #00b300;
          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }



          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
          }

          .etc {
               margin-left: -40px;
               min-width: 90px;
               font-size: 20px;
          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

          .payment {
               float: left;
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
          }

          .morefooter {
               height: 100px;
               width: 100%;
               background-color: white;

          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .gmail {
               margin-top: 10px;
               float: right;
               margin-right: 150px;

          }


          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          body {
               margin: 0;
               padding: 0;
               font-family: sans-serif;
               background-size: cover;
               background-position: center;
               box-sizing: border-box;
          }

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }

          .lost {
               /* <font-fam></font-fam>; */
               color: black;
               text-align: center;
               height: 8%;
               margin-top: 150px;
               border-radius: 30px;
               font-size: 30px;
               /* margin-top: 5em; */
               background-color: olive;
               margin-top: 120px;
               margin: auto;
          }

          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }


          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-top: 2%;
               text-align: center;
               border-radius: 25px;
          }


          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          .lost {
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               color: black;
               text-align: center;
               margin-top: 220px;
               margin: auto;
          }


          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-right: 12%;
               background-color: #00b300;
               text-align: center;
               /* border-radius: 25px; */
               width: 9%;
               height: 8%;
               margin-top: -5%;
               padding: 5px;

          }

          .items {
               width: 100%;
               margin: auto;
               height: auto;
          }

          .productbox {
               float: left;
               margin: 15px;
               margin-left: 30px;
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          }

          .productbox:hover {
               float: left;
               margin: 25px;
               margin-left: 30px;
               padding: 20px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 5px;
               font-weight: bolder;
               height: 325px;
               width: 240px;

          }

          .slideshow {
               margin-top: 10px;
               margin-left: 100px;
               margin-bottom: 20px;
               float: left;
               border-style: solid;
          }

          #navbar {

               padding: 20px;
               color: green;
               text-decoration: none;
               margin: 20px;
               font-size: 25px;
               padding-top: 10px;
          }

          #navbar:hover {
               padding: 20px;
               color: green;
               text-decoration: underline;
               margin: 15px;
               font-size: 25px;
               font-weight: bolder;
               padding-top: 10px;
          }

          #navbar i {
               padding-right: 1%;
          }

          .time {
               background-color: red;
               /* margin-left: 20px; */
          }

          .whats {
               text-align: center;
               margin-left: 30%;
          }

          .f1 {
               float: left;
               background-color: #fff;
               border: 1px solid red;
               height: 200px;
               border-radius: 50%;
               width: 200px;
               padding-top: 20px;
               border-style: solid;
               background-image: url("../Images/Website/f2.jpg");
               background-size: 200px 200px;
               background-repeat: no-repeat;
               border-color: #000;
               /* opacity: 5%; */
          }

          .t1 {
               padding-top: 70px;
               text-align: center;
               justify-items: center;
               color: black;
               font-weight: bold;
          }

          .t5 {
               margin-top: -13px;
          }

          .t4 {
               margin-top: -13px;

          }

          .whatsnew {
               /* background-image: url("../Images/Website/back.jpeg"); */

               background-color: red;

          }

          .f2 {
               margin-left: 130px;
               margin-right: 150px;
          }

          .f3 {
               margin-right: 150px;

          }

          .f4 {
               margin-right: 150px;
          }



          .aligncenter {
               text-align: center;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          a {
               color: goldenrod;
          }

          .navbar-inverse {
               background: #00cc00;
               color: black;
          }

          .navbar-inverse .navbar-brand,
          .navbar-inverse a {
               color: black;
          }

          .navbar-inverse .navbar-nav>li>a {
               color: clack;
          }

          .caros {
               margin-top: 30px;

          }

          hr {
               border: 0;
               height: 0.5px;
               clear: both;
               display: block;
               width: 99%;
               background-color: black;
               margin-left: 0.5em;
          }

          img {
               max-width: 100%;
               display: inline-block;
          }

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          nav {
               background-color: #292b2c;
          }

          .navbar-custom {
               background-color: #292b2c;
          }

          /* change the brand and text color */
          .navbar-custom .navbar-brand,
          .navbar-custom .navbar-text {
               background-color: #292b2c;
          }

          .navbar-custom .navbar-nav .nav-link {
               background-color: #292b2c;
          }

          .navbar-custom .nav-item.active .nav-link,
          .navbar-custom .nav-item:hover .nav-link {
               background-color: #292b2c;
          }

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          .blackgoldie {
               background-color: #292b2c;

          }

          /* For medium devices (e.g. tablets) */
          /* @media (min-width: 420px) {
               img {
               max-width: 48%;
               }
          } */
          /* For large devices (e.g. desktops) */
          @media (min-width: 760px) {
               .resizing {
                    height: 500px;
               }
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .image {
                    max-width: 48%;
               }

               .firstimage {
                    height: auto;
                    width: 90%;
               }

               .card {
                    width: 80%;
                    margin-left: 10%;
                    margin-right: 10%;

               }

               .col {
                    margin-top: 20px;
               }

               .right {
                    display: none;
                    background-color: #ff5500;
               }


               .left {
                    display: flex;
               }

               .moblogo {
                    display: none;
               }

               .logins {
                    text-align: center;
                    margin-right: 35%;
                    padding: 15px;
               }

               .desc {
                    margin-top: 15px;
                    height: 100px;

               }

               .searchbox {
                    width: 95%;
                    margin-right: 5%;
                    margin-left: 0%;
               }

               .moblists {
                    display: inline-block;
                    text-align: center;
                    width: 100%;
               }


          }
     </style>
</head>

<body>
     <nav class="navbar navbar-expand-xl ">
          <!-- <a href="#" class="navbar-brand">Academind</a> -->
          <div class=" flex-row-reverse left ">

               <div class="p-2">
                    <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style=" color:green ;font-size:20px;margin-top:-20px;margin-bottom:20px;">&#61562;</i></a> -->
                    <!-- <span id="icon" style="color:green"> 5 </span>
                </div>  -->
               </div>
               <!-- <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;'></i></div> -->
               <a class="float-left" href="#">
                    <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
               </a>
          </div>
          <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
          </button>
          <a class="float-left" href="farmerHomepage.php">
               <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">



               <div class="proicon">

                    <?php
                    if (!isset($_SESSION['phonenumber'])) {
                         echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                    }
                    ?>
               </div>

               <div class="list-group moblists">

                    <?php
                    if (isset($_SESSION['phonenumber'])) {

                         echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                         echo "<a href='Orders.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                         echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                    } else {
                         echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                    }
                    ?>
                    <div class='loginz' style="text-align:center;">
                         <?php getFarmerUsername(); ?>
                    </div>
               </div>
          </div>




          <div class=" flex-row-reverse right ">
               <div class="p-2 cart">
                    <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green;margin-top:-20px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div> -->
                    <div class='loginz'>
                         <?php getFarmerUsername(); ?>
                    </div>
               </div>
               <div class="dropdown p-2 settings ">
                    <button class="btn  dropdown-toggle text-success" style="margin-top:-20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Settings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <?php
                         if (isset($_SESSION['phonenumber'])) {
                              echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                              echo "<a href='Orders.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
                              echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                         } else {
                              echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                         }
                         ?>
                    </div>
               </div>
          </div>
     </nav>
     <br>


     <?php
     include("../Includes/db.php");
     $sess_phone_number = $_SESSION['phonenumber'];
     // getFarmerProductDetails();
     global $con;
     if (isset($_GET['id'])) {
          $prod_id = $_GET['id'];
          $query = "select * from products where product_id=" . $prod_id;
          $run_query = mysqli_query($con, $query);
          $resultCheck = mysqli_num_rows($run_query);
          if ($resultCheck > 0) {
               while ($rows = mysqli_fetch_array($run_query)) {
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_type = $rows['product_type'];
                    $product_stock = $rows['product_stock'];
                    $product_description = $rows['product_desc'];
                    $product_price = $rows['product_price'];
                    $product_base_price = $rows['product_price'];
                    $product_delivery = $rows['product_delivery'];
                    $product_cat = $rows['product_cat'];

                    // echo "<div class='row'>
                    //         <div class='col col-md-6'>
                    //             <img src='../Admin/product_images/$product_image' class='rounded mx-auto d-block bord' style='float:left;' height='250px' width='300px' >
                    //             <h4>$product_type</h4>
                    //         </div>
                    //         <div class='col col-md-6'><br>
                    //           <h3 style='font-weight:bold;'>" . $product_title."</h3><br>"  
                    //             . " product type  :  " . $product_type."<br>" 
                    //             . " product stock  :  " . $product_stock."<br>"
                    //             . " product Description  :  " . $product_description."<br>" 
                    //             . " product price  :  " . $product_price."<br>" 
                    //             . " product Delivery  :  " . $product_delivery."<br>"
                    //             . " product category  :  " . $product_cat ."<br>".
                    //         "</div> </div>";
                    if ($product_stock == 0) {
                         $str = "Not In Stock";
                    } else {
                         $str = "In Stock";
                    }
                    if ($product_delivery == "no") {
                         $del = "Not Applicable";
                    } else {
                         $del = "Yes,Applicable";
                    }

                    $space = "....";
                    echo "<div class='container'>
                                   <div class='row'>
                                        <div class='col-md-6' style='padding:7px; margin-top:15px;'>
                                             <img src='../Admin/product_images/$product_image' class='rounded mx-auto d-block bord' height='250px' width='300px' >      
                                             <br>
                                             <div class='row'>
                                                  <div class='col-md-12'>
                                                       <h3 class='text-center' style='font-weight:bold;'>$product_type</h3>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class='col-md-6 blackgoldie'>
                                             <div class='row'>
                                                  <div class='col-md-12 bottom-rule aligncenter'>
                                                       <h1 style='color:goldenrod;padding:10px;'>$product_title</h1>
                                                  </div>
                                             </div>
                                             <h3  style='color:white;padding:7px;'>Rs. " . $product_price . ".00 per Kg</h3>
                                             <hr/>
                                             <div class='row'>
                                                  <div class='col-md-12 text-center'>
                                                       <h3 style='color:green;padding:7px;'>$str<h3>
                                                  </div>
                                             </div>
                                             <div class='row'>
                                                  <div class='col-md-12 text-center'>
                                                       <h3 style='color:white;padding:7px;'><span class='monospaced'>product stock  : " . $product_stock . " Kgs" . "</span><h3>
                                                  </div>
                                             </div>
                                             <div class='row' style='padding:7px;'>
                                                  <div class='row text-center ml-4 mt-3' >
                                                       <i class='fa fa-truck fa-2x' aria-hidden='true' style='color:goldenrod;'> </i>
                                                       <h3 style='color:white;'>   Product Delivery : " . $del . "<h3>
                                                  </div>
                                             </div>

                                             <div class='row' style='padding:7px; margin-bottom:15px;' >
                                                  <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 aligncenter'> <a href='EditProduct.php?id=$prod_id' class='btn btn-warning border-secondary' style='color:black'><b>Edit Product</b></a></div>
                                                  <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 aligncenter'> <a href='Transactions.php' class='btn btn-warning border-secondary' style='color:black'><b>My Transaction</b></a></div>
                                             </div>
                                        </div>         
                                   </div>
                              </div>
                              <div class='container'>
                                   <div class='desc'>
                                        <div class='row'>
                                             <div class='col-md-12'>
                                             <h3><span class='monospaced'><u><b>Product Description:-</b></u></span><h3>
                                             </div>
                                        </div>
                                        <div class='row'>
                                                  <div class='col-md-12'>
                                                       <h5><span class='monospaced'>" . $space . $product_description . "</span><h5>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>";
               }
          }
     } else {
          echo "<br><br><hr><h1 align = center>Product Not Uploaded !</h1><br><br><hr>";
     }
     ?>



     <br><br>
     <section id="footer" class="myfooter">
          <div class="container">
               <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col aligncenter">
                         <br>
                         <h5>Payment Option</h5>
                         <img src="../Images/Website/paytm1.jpg" alt="paytm">
                         <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                         <ul class="list-unstyled list-inline social text-center">
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                         </ul>
                    </div>

               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                         <p><u><a href="https://www.agrocraft.com/">AgroCraft Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
                         <p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.google.com" target="_blank">Agrotech</a></p>
                    </div>
                    </hr>
               </div>
          </div>
     </section>

</body>

</html>