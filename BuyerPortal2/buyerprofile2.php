<?php
    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from buyerregistration where buyer_phone = '$sessphonenumber'";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['buyer_name'];
        $phone = $row['buyer_phone'];
        $address = $row['buyer_addr'];
        $pan = $row['buyer_pan'];
        $bank = $row['buyer_bank'];

        $comp = $row['buyer_comp'];
        $license = $row['buyer_license'];
        $mail = $row['buyer_mail'];
        $user = $row['buyer_username'];
    }   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<style>
    #staticEmail{
        text-align:center;
         border-style:solid;
        border-color:black;
        /* background-color:#ff5500;*/
        width:30%;
        font-size:20px;
        color:black; 
    } 
    .text {
        background-color: black;
        color: gold;
        font-size:18px;
    }
    input{
        text-align:center;
        /* border-style:solid;
        border-color:black; */
        background-color:#ff5500;
        width:50%;
        color:red;
    }
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

    .x {
        height: 70vh;
        margin-top: 10vh;
        margin-bottom: 10vh;
        width: 100%;
    }

    .inp::placeholder {
        display: none;
        visibility: hidden;
    }

    /* .s {
        width: auto;
    }
     */

    .x {
        background-color: white;
        height: 80%;
        width: 38%;
        margin-top: 0%;
    }

   

    h2,
    h1 {
        color: black;
    }

    .imag {
        height: 120px;
    }

    .s {
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        margin-top:0%;
        margin-bottom:4%;
    
    }

    .fp {
        margin-left: 0%;
        margin-top: -10%;
        text-align: right;
        color: black;
        font-size: 20px;
    }

    .nu {
        /* margin-right: 0%;
        margin-left: 25%; */
        margin-top: -10%;
        text-align: center;
        margin-left: -2%;
        color: black;
        font-size: 20px;
    }

    .guard {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #ffc857;
        /* background-color: #ffc857; */
        line-height: 0.1em;
        margin: 10px 0 20px;
        font-family: serif;
    }

    .guard span {
        background: white;
        padding: 0 10px;
    }

    .lastbtn {
        color: goldenrod;
    }

    .text {
        min-width: 180px !important;
        display: inline-block !important
    }

    .inp {
        width: 10%;
    }

    .head {
        margin-left: -20%;
        /* background-color: black; */
        margin-top: 10%;
    }

    /* .area{

    } */

    .logo {
        margin-left: 0%;
        float: right;
    }

    .inner {
        float: left;
    }

    .main {
        float: left;
    }

    a {
        text-decoration: none;
        color: #333;
    }

    a:hover {
        text-decoration: none;
        color: black
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

    
        .x {
            padding: 0;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }

   
        .s {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .inp::placeholder {
            visibility: visible;
        }

        .input-group-prepend {
            display: inline-block;
       
        }

        .fp {
            margin-left: 0%;
            margin-top: -30%;
            text-align: center;
         
        }

        .nu {
            margin-right: 0%;
            margin-left: 0%;
            margin-top: -15%;
            text-align: center;
        }

        .text1 {
            text-align: center;
            font-size: 20px;
            color: #333;
        }

        .text2 {
            text-align: center;
            font-size: 20px;
        }

        .button1 {
            margin-top: 10%;
        }

        .inp1 {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #333;
        }
      
        .text {
        min-width: 150px !important;
        display: inline-block !important
    }
    }
</style>

<body>





    
    <div class="container">
    <div class="text-center">
        <br>
<br>
        <b>
            <h1 class="guard"><span><b>BUYER'S PROFILE</b></span>
            </h1>
        </b>
        <br>
    </div></div>

    <div class="container" >
        <div class="form">
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-user mr-2"></i>Full name</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $name?>">
            </div>
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-phone-alt mr-2"></i>Phone No.</span>
                </div>
                <input type="phonenumber" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $phone ?>">
            </div>
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-home mr-2"></i>Address</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $address ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-pencil-alt mr-2"></i>Pan No.</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $pan ?> ">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-university mr-2"></i>Account No.</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $bank ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-building mr-2"></i>Company</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $comp ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-id-badge mr-2"></i>License</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $license?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="far fa-envelope mr-2"></i>Email id </span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $mail?> ">
            </div> 
        </div>
        <button type="button" class="btn text-center d-flex mx-auto btn-lg" style="background-color:#292b2c;color:goldenrod">Edit Profile</button>
    </div>

    
</body>

</html>