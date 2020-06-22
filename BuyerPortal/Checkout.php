<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <link rel="stylesheet" type="text/css" href="cart_pages.css">
 -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>checkout </title>
  <style>
    .tabley {
      width: 50%;

      /*border-style: solid;*/
      /*border-width: 2px;*/
      /*padding: 25px;*/
      /*                margin-right:215px; 
*/
    }

    .tabley th {
      text-align: center;
      border-style: solid;
      /*border-width: 2px;*/
      padding: 5px;
      margin: 5px;




    }

    .tdy {
      text-align: center;
      border-style: solid;
      border-width: 2px;
      padding: 10px;

    }

    th {
      background-color: #555;
      color: white;
    }

    * {
      margin: 0;
    }

    .add {
      /*float:left;*/
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-radius: 25%;
      padding: 20px;
      margin-left: 10px;
      margin-top: 5px;
      width: 100px;
      clear: both;
      text-align: center;

    }

    .edit {
      margin-left: 10px;
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-color: black;
      border-radius: 25%;
      padding: 20px;
      text-align: center;
      margin-top: 10px;

    }

    .place_odder {
      text-align: center;
    }

    .lang {
      width: 20%;
      text-align: center;
      height: 100px;
      background-color: white;
      margin-left: 155px;
      border-style: solid;
      border-width: 2px;
      padding: 10px;
      justify-content: center;
      border-radius: 5%;
      border-color: black;
    }

    .item {
      float: left;
      margin-top: -70px;
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-radius: 25%;
      padding: 20px;
      margin-left: 10px;
    }

    .payment {
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-color: black;
      border-radius: 25%;
      padding: 20px;
      text-align: center;
      float: left;
      clear: both;
      margin-left: 0px;
      font-size: 20px;
      margin-top: 20px;
    }

    .cash {
      clear: both;

      float: left;
      margin-top: 10px;
      margin-left: 220px;
      margin-right: 20px;
    }

    .patym {
      margin-top: 10px;
      margin-left: 20px;

      float: left;

    }

    .del_options {
      margin-left: 130px;

    }

    .footer {
      height: 100px;
      width: 100%;
    }

    .a {
      height: 100px;
      width: 100%;
    }

    .selly {
      text-align: center;
      width: 100%;
      height: 40px;
    }

    .place_odder {
      float: right;
      border-color: black;
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-radius: 25%;
      padding: 20px;
      margin-left: 10px;
      margin-right: 20px;
    }

    .boxy {
      height: 150px;
      width: 20%;
      float: right;
      /* background-color:yellow;

 */

      margin-top: -550px;
      margin-right: -280px;

    }

    .totaly {
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-radius: 25%;
      float: left;
      text-align: center;
      /*justify-content: center;*/
      font-size: 25px;
      padding: 20px;
      /*margin-top:120px;
     margin-left:20px; */
    }

    .rs {
      margin-left: 10px;
      float: right;
    }
  </style>

</head>

<body>
  <br>
  <div class="add">
    <label>1.</label><label class="del_add">DELIVERY ADDRESS<label></div>
  <button class="edit">CHANGE ADDRESS</button>
  <br>
  <div class="lang">

    <label>lorem ipsum knwo dnqwo dnkqwdhqwh dqoh9oh dnqohi <br>lorem ipsum knwo dnqwo dnkqwdhqwh dqoh9oh dnqohi </label>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <label class=" item">2.ITEMS</label>
  <div class="del_options">
    <table class="tabley">
      <thead>
        <th class="thy">Sr no</th>
        <th class="thy">Name</th>
        <th class="thy"> Total</th>
        <th class="thy">Delivary Options</th>
      </thead>
      <tr>
        <td class="tdy" data-label="Sr no">1</td>
        <td class="des tdy" data-label="Item Name">Best Patato of the world
        </td>
        <td class="tdy" data-label="Unit Price">rs 2</td>

        <td class="tdy" data-label="Deletion">
          <select class="selly">
            <option value="Buyer">Buyer</option>
            <option value="Farmer">Farmer</option>
            <option value="Courier">Courier</option>
          </select>
        </td>
      </tr>
    </table>
  </div>
  <div class="footer">

    <label class="payment">Payment Options:-</label>
    <div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
    <div class="patym"><img src="../Images/Website/petm.jpg" height="75px" width="125px"></div>
  </div>

  <button class="place_odder">PLACE ORDER</button>

  <button class="place_odder">GO BACK</button>
  <div class="up">

    <div class="boxy">
      <label class="totaly"> GRAND TOTAL : <label class="rs">Rs 35</label></label>
      <!-- <button class='checkout'> <i class='fas fa-shopping-cart' style=' background-color:#FFD700'></i></button> -->
      <!--  <a href="Checkout.php" style = "color:black;"><button class="checkout"><span>CHECKOUT</span> <label class="arrow"><i class="fas fa-arrow-right"></i></label></a>
 -->
    </div>

    <!--   <a href="emptyCart.php" style = "color:black;"><label class="empty">EMPTY CART <i class="fas fa-shopping-cart"></i></label></a>
          <br>
          <a href="BuyerHomepage.php" style = "color:black;"><label class="cont">CONTINUE SHOPING <i class="fas fa-shopping-bag"></i></label></a> -->


  </div>






</body>

</html>