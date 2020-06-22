
<html>
<head> 
<body>   
<style>
    #head{
        font-family: "Times New Roman";
        font-weight: bold;
        font-size: 50px;
    }
    #imagee{
        text-align: center;
    }
    body {
                       
        font-size: 30px;             
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        border-collapse: collapse;
         }
    #head{
        font-style: italic;
        text-shadow: 2px 2px green;
        font-size: 40px;
        text-decoration-style: wavy;
    }
    .cateo {
        
        border-color: black;
       
     }
     #producttype {
         
        border-color: black;
       
     }
     #prostock {
        border-color: transparent;
     }

     .tab{
            width: 100%;

               border-style: solid;
               border-width: 2px;
               padding: 2px;

        }
        th{
            border-color: white;
            border-style: solid;
               border-width: 2px;
               padding: 2px;
               font-size: 30px;
              
        }
        .tableyhead{
            
            color: red;
        
        }
        .thy {
               background-color: #555;
               color: white;
               
          }
          .trow{
              align-content: center;
          }
          .cont {
               border-radius: 25%;
               border-style: solid;
               background-color: #FFD700;
               padding: 10px;
               margin-top: 40px;
               /* margin-left:46%; */
               transition: 1s;
             font-size: 30px;
          }
          .cont:hover {
               padding-top: 15px;
               padding-bottom: 20px;
               transition: 1s;
               width: 270px;
               height: 70px;
               font-size: 35px;
          }
    
</style>
        <br>
        <h1 align="center"  id="head"> ANSH POTATOES </h1>
        <img id="imagee" src=Pota.jpg width="600" height="400" border=3>
        <br>
        <br>

        <tr >
            <td class="cateo" align="center"><b>1. Product Cateogory : Vegetables <br></b></td>
        </tr>
        <br>
        <tr id="producttype">
            <td align="center"><b>2. Product Type : Potato <br></b></td>
        </tr>
        <br>
        <tr >
            <td align="center"><b>3. Product Stock : 5Kg <br></b></td>
        </tr>
        <br>
        <tr >
            <td align="center"><b>4. Product Price : 23Rs/Kg <br></b></td>
        </tr>
        <br>
        <tr >fffffffffffffff
            <td align="center"><b>5. Product Description : Fresh Potatoes <br></b></td>
        </tr>
        <br>
        <tr >
            <td align="center"><b>6. Product Keyword : Potato <br></b></td>
        </tr>
        <br>
        <tr >
            <td align="center"><b>7. Delivery : Yes <br></b></td>
        </tr>

        <br>
    <h2 align="center"> TRANSACTION  HISTORY </h1>
    
    <table  class=tab>
        <thead  align="center" class=tableyhead>
        <th  class=thy> Buyer Name</th>
        <th  class=thy>Phone</th>
        <th  class=thy >Address</th>
        <th  class=thy >Product Title</th>
        <th  class=thy>Quantity</th>
        <th  class=thy>Delivery</th>
        <th  class=thy>Amount</th>
        </thead>
        <tr align="center" class=trow>
            <th align="center" >Abhishek</th>
            <th align="center">9871234511</th>
            <th align="center">Sanpada</th>
            <th align="center">Abhishek-Apples</th>
            <th align="center">1</th>
            <th align="center">Yes</th>
            <th >70</th>
        </tr>
        <tr align="center" >
            <th>Ansh</th>
            <th>9876987211</th>
            <th>Thane</th>
            <th>Ansh-Mangoes</th>
            <th>2</th>
            <th>No</th>
            <th>120</th>
        </tr>
    </table>

<br>
<br>
<a href="BuyerHomepage.php" style="color:black;"><label class="cont">INSERT NEW PRODUCT <i class="fas fa-shopping-bag"></i></label></a>
<br>
<br>   
</body>
</html>