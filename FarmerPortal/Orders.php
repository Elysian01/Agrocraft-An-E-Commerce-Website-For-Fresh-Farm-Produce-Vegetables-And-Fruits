<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer Homepage</title>
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

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

          h3 {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #000;
               line-height: 0.1em;
               margin: 10px 0 20px;
          }

          h3 span {
               background: #fff;
               padding: 0 10px;
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

          .instagram {
               margin-top: 10px;
               float: left;
               margin-left: 420px;
          }

          .instaid {
               height: 10px;
               width: 100%;

          }

          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          .gmailid {
               float: right;
               margin-right: 80px;
               margin-top: -60px;
          }

          .copy {
               float: left;
               margin-top: -65px;
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


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

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

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

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


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

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

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

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
               margin: 20px;
               font-size: 30px;
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

          .pictus {
               margin-top: 200px;
               /* background-color: red; */
          }

          .pictus>img {
               height: 100px;

               width: 150px;
          }

          .imag1 {
               margin-top: 20px;
               margin-left: 180px;
          }

          .imag2 {
               margin-top: 20px;

               margin-left: 340px;

          }

          .imag3 {
               margin-top: 20px;

               margin-left: 350px;

          }

          .imag1_under {
               max-width: 250px;
               width: 100%;
               min-height: 100px;
               margin-left: 100px;
               text-align: center;
               font-size: 20px;

          }

          .imag2_under {
               max-width: 250px;
               width: 100%;
               min-height: 100px;
               margin-left: 290px;
               margin-top: 20px;
               text-align: center;
               font-size: 20px;
          }

          .imag3_under {
               max-width: 250px;
               width: 100%;
               font-size: 20px;

               min-height: 100px;
               margin-left: 290px;
               text-align: center;
          }
          .order {
               font-size: 30px;
               /* margin-left:20%; */
               border-color: #00b300;
               border-style: solid;
               border-radius: 100%;
               padding: 15px;
               margin-top: 20px;

               border-width: 2px;

          }

          .order1 {
               background-color: #FFD700;

          }

          .selectsionz{
               border-radius: 25%;
          padding: 2%;
          border-color:black;
          margin-top: 10px;
               /* background-color: transparent; */
               background-color: #FFD700;


          }



          .a1 {
               /* width:100px; */
               margin-left: 400px;
               margin-top: -44px;
               margin-bottom: 10px;
               /* margin-bottom: 100px; */
          }

          ul {
               list-style: none;
               /* display: inline-block; */
               text-align: center;
               /* width:200px; */
          }

          .ash1 {
               width: 300px;
               text-align: center;

               /* background-color: greenyellow; */
               display: inline-block;
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
             margin-left: 30px;
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

     </style>

</head>

<body>

     <div class="header">

          <a href="Homepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

          <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top:-5px;">
                    <i class="fa fa-bars fa-2x" style="color: white;">
               </button></i>
               <ul class="dropdown-menu etc">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                         echo "<li class='options'> <a href='FarmerProfile.php'><label class='makeitgreen'>Profile</label></a><br></li>";
                         echo "<li class='options'> <a href='Orders.php'><label class='makeitgreen'>Orders</label></a></li>";
                         echo "<li class='options'> <a href='logout.php'><label class='makeitgreen'>Logout</label></a></li>";
                    } else {
                         echo "<li class='options'> <a href='../auth/FarmerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
                    }
                    ?>
               </ul>
          </div>

          <div class="proicon">

               <?php
               if (!isset($_SESSION['phonenumber'])) {
                    echo "<a href='../auth/FarmerLogin.php'> <i class='far fa-user-circle ' style='font-size:30px; color: white; padding-top:5px;'></i></a>";
               } else {
                    echo "<a href='FarmerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white; padding-top:5px;'></i></a>";
               }
               ?>
          </div>

          <div class="loginz">
               <?php getFarmerUsername(); ?>
          </div>
     </div>

     <br>

     </div>


     <div class="headerdown">

          <a href="Homepage.php" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>Home</label></a>
          <a href="MyProducts.php" id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>My Products</label></a>
          <a href="Transactions.php" id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>My Transactions</label></a>
          <a href="CallCenter.php" id="navbar"><i class="fa fa-phone fa-rotate-vertical" aria-hidden="true"></i><label>Call Centers And Sms</label></a>
          <hr>
     </div>


     <ul class="ash">
          <li class="ash1"> <i class='fas fa-people-carry order order1 '></i>
               <br><i class="fa fa-check aria" aria-hidden="true"></i><br><button class="selectsionz">Packing</button>
          </li>
          <li class="ash1"> <i class="fas fa-truck order order2"></i>
               <br><i class="fa fa-check aria" aria-hidden="true"></i><br><button class="selectsionz">Dispatch</button>
          </li>
          <li class="ash1"> <i class="fas fa-road order order3"></i>
               <br><i class="fa fa-refresh aria" aria-hidden="true"></i>
               <br><button class="selectsionz">Half way </button></li>
          <li class="ash1"><i class="fas fa-map-marker-alt order order4"></i><br><i class="fa fa-times aria" aria-hidden="true"></i>
               <br><button class="selectsionz">Reached</button>
          </li>
     </ul>

<table>
        <tr id="protitle">
            <td>
                <div class="grp1">
                    <div class="col1 t1"><b> Name</b> </div>

                    <div class="col2"><label class="text1" name="product_title" required>Gladina</label>
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">

                    <div class="col3 t1"><b>Phone number</b></div>
                    <div class="col4">
                    <label class="text1" name="product_title" >9819104641</label>            </div>

            </td>

            </div>

        </tr>
        <tr id="protitle">
            <td>
                <div class="grp1">
                    <div class="col1 t1"><b> Address</b> </div>

                    <div class="col2"><label class="text1" name="product_title" required>mumbai</label>
            </td>
            </div>
            </div>
            <td>
             

        </tr>
        <tr>  
             <td>
          
           
                <div class="grp1 movedown">
                    <div class="col1 t1"><b> Delivary time</b> </div>

                    <div class="col2"><label class="text1" name="product_title" required>approx 3 am</label>
            </td>
            </div>
            </div>
            <td>
           
                <div class="grp2 movedown">

                    <div class="col3 t1"><b>Delivary date</b></div>
                    <div class="col4">
                    <label class="text1" name="product_title" >8th December</label>            </div>

            </td>

            </div>
          </tr>
          <tr><td>
                <div class="grp1">
                    <div class="col1 t1"><b> Payment Mode</b> </div>

                    <div class="col2"><label class="text1" name="product_title" required>COD</label>
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">

                    <div class="col3 t1"><b>Delivary Mode</b></div>
                    <div class="col4">

                    <label class="text1" name="product_title" >By Farmer</label>            </div>

            </td>

            </div>
          </tr>
          <tr><td>
                <div class="grp1">
                    <div class="col1 t1 movedown"><b> Item Name</b> </div>

                    <div class="col2"><label class="text1" name="product_title" required>COD</label>
            </td>
            </div>
            </div>
            
          </tr>
          
        <tr><td>
                <div class="grp1">
                    <div class="col1 t1"><b> Price</b> </div>

                    <div class="col2"><label class="text1" name="product_title" required>200</label>
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">

                    <div class="col3 t1"><b>Quantity</b></div>
                    <div class="col4">
                    <label class="text1" name="product_title" >2 kg</label>            </div>

            </td>

            </div>
          </tr>

</table>



























     <div class="footer">
          <hr>
          <label class="payment">Payment Options:-</label>
          <div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
          <div class="patym"><img src="../Images/Website/petm.jpg" height="75px" width="125px"></div>
     </div><br><br>
     <h3><span> GET SOCIAL WITH US </span></h3>
     </div>
     <div class="morefooter">

          <div class="call">
               <i class="fas fa-phone-alt call_color"></i>
               <a href="#" style="color:black;">+91-8191046421</a>
          </div>

          <div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
          </div>

          <div class="gmail">
               <img src="../Images/Website/gmail.jpg" height="30px" width="50px">
          </div>

     </div>
     <div class="instaid">
          <div class="text"><a href="#" style="color:black;">@AgroCraft</a></div>

          <div class="gmailid">
               <a href="#" class="hypher" style="color:black;">agrocraft6@gmail.com</a>
          </div>

     </div>
     <div class="copy">
          <h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroCraft.com</h5>
     </div>

</body>

</html>