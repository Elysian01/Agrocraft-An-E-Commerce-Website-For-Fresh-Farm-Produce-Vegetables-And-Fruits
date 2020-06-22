
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
<body><style>
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
    .text {
        min-width: 180px !important;
        display: inline-block !important
    }

    .inp {
        width: 10%;
    }

    .s {
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        margin-top:0%;
        margin-bottom:4%;
    
    }
    
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
    .s {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
        .text {
        min-width: 150px !important;
        display: inline-block !important
    }}
    </style>
<div class="container" >
    <br>
    <div class="text-center"><h2><b>Edit Profile</h2></b></div>
        <div class="form">
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-user mr-2"></i>Full name</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="Ansh">
            </div>
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-phone-alt mr-2"></i>Phone No.</span>
                </div>
                <input type="phonenumber" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="">
            </div>
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-home mr-2"></i>Address</span>
                </div>
                <input type="text"  class="form-control border border-dark" id="staticEmail" value="kbibc">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>State</span>
                </div>
                <input type="text"  class="form-control  border border-dark" id="staticEmail" value="kbibc">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>District</span>
                </div>
                <input type="text"  class="form-control  border border-dark" id="staticEmail" value="kbibc">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-pencil-alt mr-2"></i>Pan No.</span>
                </div>
                <input type="number"  class="form-control border border-dark" id="staticEmail" value="  tt5g5">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-university mr-2"></i>Account No.</span>
                </div>
                <input type="number"  class="form-control border border-dark" id="staticEmail" value="5tg5 ">
            </div> 
           
            <!-- <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="far fa-envelope mr-2"></i>Email id </span>
                </div>
                <input type="email" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" ">
            </div>  -->
        </div>
        <button type="submit" class="btn text-center d-flex mx-auto btn-lg" style="background-color:#292b2c;color:goldenrod">Confirm</button>
        <button type="button" class="btn text-center d-flex mx-auto btn-lg mt-4" style="background-color:#292b2c;color:goldenrod">Change Password</button>
   <br>
   <button> </div>
</body>
</html>