<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<style>
    .myfooter {
        background-color: #292b2c;

        color: goldenrod;
        margin-top: 15px;
    }

    .aligncenter {
        text-align: center;
    }

    a {
        color: goldenrod;
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


    .mybtn {
        border-color: green;
        border-style: solid;
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
.cross{
    /* margin-left:27%; */
    margin-top:-8%;
    float:right;
}
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
            display: none;
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
        } */

        .right {
            display: none;
            background-color: #ff5500;
        }
        .cross{
    /* margin-left:21%; */
    margin-top:-8%;
    float:right;
}
        /* 
            .settings{
            margin-left:79%;
        } */
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

        /* .pic{
        height:auto;
    } */

        /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
    }
</style>

<body>





<nav class="navbar navbar-expand-xl ">

<div class=" flex-row-reverse left ">

    <div class="p-2">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
    <a class="float-left" href="bhome.php">
        <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
    </a>
</div>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
</button>
<a class="float-left" href="bhome.php">
    <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
</a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <div class="input-group mb-1 ml-2 searchbox">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
        </div>
        <form action="SearchResult.php" method="get" enctype="multipart/form-data">
            <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
        </form>
    </div>
    <?php
    getUsername();
    ?>
    <div class="list-group moblists">

        <?php
        if (isset($_SESSION['phonenumber'])) {
            echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
            echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
            echo "<a href='saveforlater.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Save For Later</a>";
            echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Subscriptions</a>";
            echo "<a href='farmer.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Farmers</a>";
            echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
        } else {
            echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
        }
        ?>

    </div>
</div>




<div class=" flex-row-reverse right ">
    <div class="p-2 cart">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="dropdown p-2 settings ">
        <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Settings
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php
            if (isset($_SESSION['phonenumber'])) {
                echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                echo "<a href='#' class='dropdown-item'  style='padding-right:-20px;'>Subscriptions</a>";
                echo "<a href='saveforlater.php' class='dropdown-item' style='padding-right:-20px;'>Save For Later</a>";
                echo "<a href='farmers.php' class='dropdown-item' style='padding-right:-20px;' >Farmers</a>";
                echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
            } else {
                echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
            }
            ?>
        </div>
    </div>


    <div class="text-success  login">Login</div>
</div>

</nav>
    <div class="container">

        <div class="text-left ">
            <h2>Save For later
                <div class="text-right"><button type="button" class="btn btn-warning border border-dark " style="margin-top:-5%"><b>Delete all</b></button></div>
            </h2>
            <hr style="margin-top:-2%">

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card pl-3 pr-3 pb-0 pt-2 mt-2 ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b>
                       <button class="cross" style="border-style:none;background-color:transparent;"><i class="fas fa-times"style=""></i></button>
                        </h3>

                    </div>
                    <img class="card-img-top" src="fruit1.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card  pl-3 pr-3 pb-0 pt-2 mt-2 ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b></h3>
                    </div>
                    <img class="card-img-top pic" src="myfruit1.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card pl-3 pr-3 pb-0 pt-2 mt-2  ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b></h3>
                    </div>
                    <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card pl-3 pr-3 pb-0 pt-2 mt-2  ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b></h3>
                    </div>
                    <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap" height="315px">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card pl-3 pr-3 pb-0 pt-2 mt-2 ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b></h3>
                    </div>
                    <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>




    <section id="footer" class="myfooter">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col aligncenter">
                    <p>Payment Option</p>
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
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                    <p><u><a href="https://www.agrocraft.com/">AgroCraft Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
                    <p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.google.com" target="_blank">Agrotech</a></p>
                </div>
                </hr>
            </div>
        </div>
</body>

</html>