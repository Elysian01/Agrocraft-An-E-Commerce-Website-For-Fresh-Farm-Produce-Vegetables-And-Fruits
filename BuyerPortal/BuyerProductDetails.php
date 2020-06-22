<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Product Details</title>
     <!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <script>
          function state() {
               var a = document.getElementById('states').value;

               if (a === '31') {
                    var array = ['Andamans', 'Nicobars'];
               } else if (a === '01') {
                    var array = ['Adilabad', 'Nizamabad', 'Karimnagar', 'Medak', 'Hyderabad', 'Rangareddi', 'Mahbubnagar', 'Nalgonda', 'Warangal', 'Khammam', 'Srikakulam', 'Vizianagaram', 'Visakhapatnam', 'East Godavari', 'West Godavari', 'Krishna', 'Guntur', 'Prakasam', 'Nellore', 'Cuddapah', 'Kurnool', 'Anantapur', 'Chittoor'];
               } else if (a === '02') {
                    var array = ['Kokrajhar', 'Dhubri', 'Goalpara', 'Bongaigaon', 'Barpeta', 'Kamrup', 'Nalbari', 'Darrang', 'Marigaon', 'Nagaon', 'Sonitpur', 'Lakhimpur', 'Dhemaji', 'Tinsukia', 'Dibrugarh', 'Sibsagar', 'Jorhat', 'Golaghat', 'Karbi Anglong', 'North Cachar Hills', 'Cachar', 'Karimganj', 'Hailakandi'];
               } else if (a === '03') {
                    var array = ['Pashchim Champaran', 'Purba Champaran', 'Sheohar *', 'Sitamarhi', 'Madhubani', 'Supaul *', 'Araria', 'Kishanganj', 'Purnia', 'Katihar', 'Madhepura', 'Saharsa', 'Darbhanga', 'Muzaffarpur', 'Gopalganj', 'Siwan', 'Saran', 'Vaishali', 'Samastipur', 'Begusarai', 'Khagaria', 'Bhagalpur', 'Banka *', 'Munger', 'Lakhisarai *', 'Sheikhpura *', 'Nalanda', 'Patna', 'Bhojpur', 'Buxar *', 'Kaimur (Bhabua) *', 'Rohtas', 'Jehanabad ', 'Aurangabad', 'Gaya', 'Nawada', 'Jamui *'];
               } else if (a === '04') {
                    var array = ['Kachchh', 'Banas Kantha', 'Patan  *', 'Mahesana', 'Sabar Kantha', 'Gandhinagar', 'Ahmadabad', 'Surendranagar', 'Rajkot', 'Jamnagar', 'Porbandar  *', 'Junagadh', 'Amreli', 'Bhavnagar', 'Anand  *', 'Kheda', 'Panch Mahals', 'Dohad  *', 'Vadodara', 'Narmada  *', 'Bharuch', 'Surat', 'The Dangs', 'Navsari  *', 'Valsad'];
               } else if (a === '05') {
                    var array = ['Panchkula *', 'Ambala', 'Yamunanagar', 'Kurukshetra', 'Kaithal', 'Karnal', 'Panipat', 'Sonipat', 'Jind', 'Fatehabad *', 'Sirsa', 'Hisar', 'Bhiwani', 'Rohtak', 'Jhajjar *', 'Mahendragarh', 'Rewari', 'Gurgaon', 'Faridabad'];
               } else if (a === '06') {
                    var array = ['Chamba', 'Kangra', 'Lahul & Spiti', 'Kullu', 'Mandi', 'Hamirpur', 'Una', 'Bilaspur', 'Solan', 'Sirmaur', 'Shimla', 'Kinnaur'];
               } else if (a === '07') {
                    var array = ['Kupwara', 'Baramula', 'Srinagar', 'Badgam', 'Pulwama', 'Anantnag', 'Leh (Ladakh)', 'Kargil', 'Doda', 'Udhampur', 'Punch', 'Rajauri', 'Jammu', 'Kathua'];
               } else if (a === '08') {
                    var array = ['Belgaum', 'Bagalkot *', 'Bijapur', 'Gulbarga', 'Bidar', 'Raichur', 'Koppal *', 'Gadag *', 'Dharwad', 'Uttara Kannada', 'Haveri *', 'Bellary', 'Chitradurga', 'Davangere*', 'Shimoga', 'Udupi *', 'Chikmagalur', 'Tumkur', 'Kolar', 'Bangalore', 'Bangalore Rural', 'Mandya', 'Hassan', 'Dakshina Kannada', 'Kodagu', 'Mysore', 'Chamrajnagar*'];
               } else if (a === '09') {
                    var array = ['Kasaragod', 'Kannur', 'Wayanad', 'Kozhikode', 'Malappuram', 'Palakkad', 'Thrissur', 'Ernakulam', 'Idukki', 'Kottayam', 'Alappuzha', 'Pathanamthitta', 'Kollam', 'Thiruvananthapuram'];
               } else if (a === '10') {
                    var array = ['Sheopur *', 'Morena', 'Bhind', 'Gwalior', 'Datia', 'Shivpuri', 'Guna', 'Tikamgarh', 'Chhatarpur', 'Panna', 'Sagar', 'Damoh', 'Satna', 'Rewa', 'Umaria *', 'Shahdol', 'Sidhi', 'Neemuch *', 'Mandsaur', 'Ratlam', 'Ujjain', 'Shajapur', 'Dewas', 'Jhabua', 'Dhar', 'Indore', 'West Nimar', 'Barwani *', 'East Nimar', 'Rajgarh', 'Vidisha', 'Bhopal', 'Sehore', 'Raisen', 'Betul', 'Harda *', 'Hoshangabad', 'Katni *', 'Jabalpur', 'Narsimhapur', 'Dindori *', 'Mandla', 'Chhindwara', 'Seoni', 'Balaghat'];
               } else if (a === '11') {
                    var array = ['Nandurbar *', 'Dhule', 'Jalgaon', 'Buldana', 'Akola', 'Washim *', 'Amravati', 'Wardha', 'Nagpur', 'Bhandara', 'Gondiya *', 'Gadchiroli', 'Chandrapur', 'Yavatmal', 'Nanded', 'Hingoli *', 'Parbhani', 'Jalna', 'Aurangabad', 'Nashik', 'Thane', 'Mumbai (Suburban) *', 'Mumbai', 'Raigarh', 'Pune', 'Ahmadnagar', 'Bid', 'Latur', 'Osmanabad', 'Solapur', 'Satara', 'Ratnagiri', 'Sindhudurg', 'Kolhapur', 'Sangli'];
               } else if (a == 12) {
                    var array = ['Senapati', 'Tamenglong', 'Churachandpur', 'Bishnupur', 'Thoubal', 'Imphal West', 'Imphal East *', 'Ukhrul', 'Chandel'];
               } else if (a === '18') {
                    var array = ['Thiruvallur', 'Chennai', 'Kancheepuram', 'Vellore', 'Dharmapuri', 'Tiruvannamalai', 'Viluppuram', 'Salem', 'Namakkal   *', 'Erode', 'The Nilgiris', 'Coimbatore', 'Dindigul', 'Karur  *', 'Tiruchirappalli', 'Perambalur  *', 'Ariyalur  *', 'Cuddalore', 'Nagapattinam  *', 'Thiruvarur', 'Thanjavur', 'Pudukkottai', 'Sivaganga', 'Madurai', 'Theni  *', 'Virudhunagar', 'Ramanathapuram', 'Thoothukkudi', 'Tirunelveli ', 'Kanniyakumari'];
               } else if (a === '39') {
                    var array = ['Yanam', 'Pondicherry', 'Mahe', 'Karaikal'];
               } else if (a === '37') {
                    var array = ['Lakshadweep'];
               } else if (a === '42') {
                    var array = ['North Goa ', 'South Goa'];
               } else if (a === '34') {
                    var array = ['Dadra & Nagar Haveli'];
               } else if (a === '36') {
                    var array = ['Diu', 'Daman'];
               } else if (a === '23') {
                    var array = ['Koriya *', 'Surguja', 'Jashpur *', 'Raigarh', 'Korba *', 'Janjgir - Champa*', 'Bilaspur', 'Kawardha *', 'Rajnandgaon', 'Durg', 'Raipur', 'Mahasamund *', 'Dhamtari *', 'Kanker *', 'Baster', 'Dantewada*'];
               } else if (a === '24') {
                    var array = ['Garhwa *', 'Palamu', 'Chatra *', 'Hazaribag', 'Kodarma *', 'Giridih', 'Deoghar', 'Godda', 'Sahibganj', 'Pakaur *', 'Dumka', 'Dhanbad', 'Bokaro *', 'Ranchi', 'Lohardaga', 'Gumla', 'Pashchimi Singhbhum', 'Purbi Singhbhum', 'ORISSA', 'Bargarh  *', 'Jharsuguda  *', 'Sambalpur', 'Debagarh  *', 'Sundargarh', 'Kendujhar', 'Mayurbhanj', 'Baleshwar', 'Bhadrak  *', 'Kendrapara *', 'Jagatsinghapur  *', 'Cuttack', 'Jajapur  *', 'Dhenkanal', 'Anugul  *', 'Nayagarh  *', 'Khordha  *', 'Puri', 'Ganjam', 'Gajapati  *', 'Kandhamal', 'Baudh  *', 'Sonapur  *', 'Balangir', 'Nuapada  *', 'Kalahandi', 'Rayagada  *', 'Nabarangapur  *', 'Koraput', 'Malkangiri  *'];
               } else if (a === '21') {
                    var array = ['Darjiling ', 'Jalpaiguri ', 'Koch Bihar ', 'Uttar Dinajpur', 'Dakshin Dinajpur *', 'Maldah ', 'Murshidabad ', 'Birbhum', 'Barddhaman ', 'Nadia ', 'North Twenty Four Parganas', 'Hugli ', 'Bankura ', 'Puruliya', 'Medinipur ', 'Haora ', 'Kolkata', 'South  Twenty Four Parganas'];
               } else if (a === '13') {
                    var array = ['West Garo Hills', 'East Garo Hills', 'South Garo Hills *', 'West Khasi Hills', 'Ri Bhoi  *', 'East Khasi Hills', 'Jaintia Hills'];
               } else if (a === '22') {
                    var array = ['North ', 'West', 'South', 'East'];
               } else if (a === '20') {
                    var array = ['Saharanpur', 'Muzaffarnagar', 'Bijnor', 'Moradabad', 'Rampur', 'Jyotiba Phule Nagar *', 'Meerut', 'Baghpat *', 'Ghaziabad', 'Gautam Buddha Nagar *', 'Bulandshahr', 'Aligarh', 'Hathras *', 'Mathura', 'Agra', 'Firozabad', 'Etah', 'Mainpuri', 'Budaun', 'Bareilly', 'Pilibhit', 'Shahjahanpur', 'Kheri', 'Sitapur', 'Hardoi', 'Unnao', 'Lucknow', 'Rae Bareli', 'Farrukhabad', 'Kannauj *', 'Etawah', 'Auraiya *', 'Kanpur Dehat', 'Kanpur Nagar', 'Jalaun ', 'Jhansi', 'Lalitpur', 'Hamirpur', 'Mahoba *', 'Banda', 'Chitrakoot *', 'Fatehpur', 'Pratapgarh', 'Kaushambi *', 'Allahabad ', 'Barabanki', 'Faizabad', 'Ambedkar Nagar *', 'Sultanpur', 'Bahraich', 'Shrawasti *', 'Balrampur *', 'Gonda', 'Siddharthnagar', 'Basti', 'Sant Kabir Nagar *', 'Maharajganj', 'Gorakhpur', 'Kushinagar *', 'Deoria', 'Azamgarh', 'Mau', 'Ballia', 'Jaunpur', 'Ghazipur', 'Chandauli *', 'Varanasi', 'Sant Ravidas Nagar *', 'Mirzapur', 'Sonbhadra'];
               } else if (a === '17') {
                    var array = ['Ganganagar', 'Hanumangarh *', 'Bikaner', 'Churu', 'Jhunjhunun', 'Alwar', 'Bharatpur', 'Dhaulpur', 'Karauli *', 'Sawai Madhopur', 'Dausa *', 'Jaipur', 'Sikar', 'Nagaur', 'Jodhpur', 'Jaisalmer', 'Barmer', 'Jalor', 'Sirohi', 'Pali', 'Ajmer', 'Tonk', 'Bundi', 'Bhilwara', 'Rajsamand *', 'Udaipur', 'Dungarpur', 'Banswara', 'Chittaurgarh', 'Kota', 'Baran *', 'Jhalawar'];
               } else if (a === '16') {
                    var array = ['Gurdaspur', 'Amritsar', 'Kapurthala', 'Jalandhar', 'Hoshiarpur', 'Nawanshahr *', 'Rupnagar', 'Fatehgarh Sahib *', 'Ludhiana', 'Moga *', 'Firozpur', 'Muktsar *', 'Faridkot', 'Bathinda', 'Mansa *', 'Sangrur', 'Patiala'];
               } else if (a === '14') {
                    var array = ['Mon', 'Tuensang', 'Mokokchung', 'Zunheboto', 'Wokha', 'Dimapur *', 'Kohima', 'Phek'];
               } else if (a === '19') {
                    var array = ['West Tripura ', 'South Tripura ', 'Dhalai  *', 'North Tripura '];
               } else if (a === '38') {
                    var array = ['Mamit *', 'Kolasib *', 'Aizawl', 'Champhai *', 'Serchhip *', 'Lunglei', 'Lawngtlai', 'Saiha *'];
               } else if (a === '32') {
                    var array = ['Tawang', 'West Kameng', 'East Kameng', 'Papum Pare *', 'Lower Subansiri', 'Upper Subansiri', 'West Siang', 'East Siang', 'Upper Siang *', 'Dibang Valley', 'Lohit', 'Changlang', 'Tirap'];
               } else if (a === '33') {
                    var array = ['Chandigarh'];
               } else if (a === '35') {
                    var array = ['North West   *', 'North   *', 'North East   *', 'East   *', 'New Delhi', 'Central  *', 'West   *', 'South West   *', 'South  *'];
               } else if (a === '40') {
                    var array = ['Uttarkashi', 'Chamoli', 'Rudraprayag *', 'Tehri Garhwal', 'Dehradun', 'Garhwal', 'Pithoragarh', 'Bageshwar', 'Almora', 'Champawat', 'Nainital', 'Udham Singh Nagar *', 'Hardwar'];
               }


               var string = "";
               for (let i = 0; i < array.length; i++) {
                    string = string + "<option>" + array[i] + "</option>";

               }
               string = "<select nmae = 'lol'>" + string + "</select>"
               document.getElementById('district').innerHTML = string;
          }
     </script>
     <script>
          var a;

          function display() {
               if (a == 0) {
                    document.getElementById("majic").style.visibility = "hidden";
                    document.getElementById("show").style.visibility = "visible";
                    return a = 1;
               } else {
                    document.getElementById("majic").style.visibility = "visible";
                    document.getElementById("show").style.visibility = "hidden";
                    // document.getElementById("show").style. visibility= "hidden";

                    return a = 0;
               }

          }
     </script>


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
               clear: none;
               float: left;
               margin-left: 20px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          #icon {
               background-color: red;
               color: white;
          }

          .dropdown {
               float: right;
               margin-right: 20px;
               margin-top: 20px;


          }

          .options {
               color: yellow;
               margin-left: 5px;
               margin-right: 26px;
          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;


          }

          .filter {
               float: right;
               margin-right: 800px;
               margin-top: 15px;
               background-color: transparent;
               color: black;


          }

          .filterbutton {
               background-color: transparent;
               border: none;
               margin-top: 5px;
               color: white;
          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               background-color: transparent;
               height: 50px;
               width: 100%;
          }

          #majic {
               height: 70px;
               width: 100%;
               visibility: hidden;


          }

          #states {
               float: left;
               width: 150px;
               margin-left: -400px;
               margin-top: 20px;
               padding: 10px;

               border-radius: 25%;
               border-color: #00b300;
          }

          #district {
               /* height: 200px; */
               border-radius: 25%;
               border-color: #00b300;
               margin-bottom: 20px;
               margin-top: 20px;
               padding: 10px;
               margin-left: 150px;
               margin-right: -400px;
          }

          .makeitgreen {
               color: #00b300;
               width: 156px;

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
               margin-left: -90px;
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

          .ribbon {
               /* text-align: center; */
               height: 200px;
               margin-left: 10%;
               margin-top: 8%;
          }

          .box {

               color: rgb(6, 36, 7);
               width: 370px;
               line-height: 40px;
               float: center;
               margin: auto;
               text-align: center;
               margin-top: 50px;
               padding: 5px;
               border-style: outset;
               /* border-width: 5px;
            border-radius: 16px; */
               border-color: lightgrey;
               /* font-size:20px; */
               height: 400px;

          }

          .idk {
               /* text-align:center; */
               margin-top: 10%;

          }

          .textarea {
               width: 50%;
               height: 10%;
          }

          .one {
               /* width:35px; */
               text-align: center;
               background-color: #FFD700;
               /* float:left; */
               /* margin-right: 50%; */
          }

          .hen {
               float: right;
          }

          .newarrival {
               background: green;
               width: 50px;
               color: white;
               font-size: 12px;
               font-weight: bold;
          }

          .col-md-7 h2 {
               color: #555;
          }

          /* .col-md-7{
                 text-align: center;
            } */
          .price {
               font-size: 20px;
               font-weight: bold;
               padding-top: 20px;
               /* margin-left: 15%; */
               color: darkolivegreen;

          }

          .some {

               font-weight: 10px;
          }

          .ri {
               float: right;
          }

          input {
               width: 9%;
               text-align: center;
          }

          .th {
               background-color: #FFD700;
               float: right;
          }

          .done {
               float: left;
               margin-left: 10%;
          }

          .mid {
               text-align: top;

          }

          .bye {
               margin-left: 10%;
          }

          .happy {
               float: right;
          }

          .doing {
               /* width:15px;    */
               text-align: center;
               background-color: #FFD700;
               float: right;
               /* float:left; */
               /* margin-right: 50%; */
               /* margin-bottom: 0px;
               bottom: 0px; */
               /* margin-top: 125px; */
               margin-right: 15px;

          }

          .mid {
               text-align: center;
               font-size: 20px;
          }

          .midone {
               margin-left: 20px;
               float: left;
          }

          .midd {
               text-align: center;
               /* margin-right:5%; */
               float: right;

          }

          .nice {
               border-color: gray;
               border-width: 5px;
               border-style: outset;
               height: 400px;
               width: 400px;
               margin-top: 50px;

          }

          #linebreak {
               display: block;
               margin-bottom: 1.25em;
          }
     </style>

</head>

<body>

     <div class="header">


          <a href="BuyerHomepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

          <div class="search_input">
               <form action="SearchResults.php" method="get" enctype="multipart/form-data">
                    <i class="fas fa-search" style="font-size:20px;color:white; "></i>
                    <input type="text" id="input1" name="search" placeholder="Search...">
               </form>
          </div>
          <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" class="dric" data-toggle="dropdown" style="margin-top:-5px;"> </span></button>
               <ul class="dropdown-menu etc">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '#'><label class='makeitgreen'>Save For Later</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerTransactions.php'><label class='makeitgreen'>Transactions</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Customer Care</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'Farmers.php'><label class='makeitgreen'>Farmer</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
                    } else {
                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
                    }
                    ?>
          </div>
          <div class="proicon">
               <?php
               if (!isset($_SESSION['phonenumber'])) {
                    echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
               } else {
                    echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
               }
               ?>
          </div>

          <div class="icon2">
               <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
               <span id="icon"> <?php echo totalItems(); ?> </span>
          </div>

          <div class="loginz">
               <?php getUsername(); ?>
          </div>

          <div class="filter">
               <button class="filterbutton " onclick="display()">Filter
                    <i class="fas fa-filter"></i></button>
          </div>
     </div>
     <div class="headerdown">
          <div id="show">
               <div class="sel1 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CROPS
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu  ">
                         <?php getCrops(); ?>
                    </ul>
               </div>
               <div class="sel2 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES </i>
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu ">
                         <?php getVegetables(); ?>
                    </ul>
               </div>
               <div class="sel3 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS </i>
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu ">
                         <?php getFruits(); ?>
                    </ul>
               </div>
          </div>
          <div id="majic" class="headerdown ">
               <table>
                    <select id="states" onchange="state()" tabindex="1">
                         <option value="0">Select State</option>
                         <option value="31">ANDAMAN & NICOBAR ISLANDS</option>
                         <option value="01">ANDHRA PRADESH</option>
                         <option value="32">ARUNACHAL PRADESH</option>
                         <option value="02">ASSAM</option>
                         <option value="03">BIHAR</option>
                         <option value="33">CHANDIGARH</option>
                         <option value="23">CHHATTISGARH</option>
                         <option value="34">DADRA AND NAGAR HAVELI</option>
                         <option value="36">DAMAN AND DIU</option>
                         <option value="35">DELHI</option>
                         <option value="42">GOA</option>
                         <option value="04">GUJARAT</option>
                         <option value="05">HARYANA</option>
                         <option value="06">HIMACHAL PRADESH</option>
                         <option value="07">JAMMU AND KASHMIR</option>
                         <option value="24">JHARKAND</option>
                         <option value="08">KARNATAKA</option>
                         <option value="09">KERALA</option>
                         <option value="37">LAKSHADWEEP</option>
                         <option value="10">MADHYA PRADESH</option>
                         <option value="11">MAHARASHTRA</option>
                         <option value="12">MANIPUR</option>
                         <option value="13">MEGHALAYA</option>
                         <option value="38">MIZORAM</option>
                         <option value="14">NAGALAND</option>
                         <option value="15">ODISHA</option>
                         <option value="39">PUDUCHERRY</option>
                         <option value="16">PUNJAB</option>
                         <option value="17">RAJASTHAN</option>
                         <option value="22">SIKKIM</option>
                         <option value="18">TAMIL NADU</option>
                         <option value="26">TELANGANA</option>
                         <option value="19">TRIPURA</option>
                         <option value="20">UTTAR PRADESH</option>
                         <option value="25">UTTARAKHAND</option>
                         <option value="40">UTTARANCHAL</option>
                         <option value="21">WEST BENGAL</option>

                    </select>


                    <select name="" id="district">
                         <option>Select District</option>
                    </select>


               </table>
          </div>
     </div>


     <div>



          <?php
          if (isset($_GET['id'])) {
               global $con;
               $product_id  = $_GET['id'];
               $query = "select * from products where product_id = $product_id";
               $run_query = mysqli_query($con, $query);
               echo "<br>";
               while ($rows = mysqli_fetch_array($run_query)) {
                    $farmer_fk = $rows['farmer_fk'];
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_price = $rows['product_price'];
                    $product_stock = $rows['product_stock'];
                    $product_delivery = $rows['product_delivery'];
                    $product_desc = $rows['product_desc'];
                    if ($product_delivery == "yes") {
                         $product_delivery = "Delivery by Farmer";
                    } else {
                         $product_delivery = "Delivery by Farmer Not Available";
                    }
                    $querya = "select * from farmerregistration where farmer_id = $farmer_fk";
                    $runa_query = mysqli_query($con, $querya);
                    echo "<br>";
                    while ($rows = mysqli_fetch_array($runa_query)) {
                         $name = $rows['farmer_name'];
                         $phone = $rows['farmer_phone'];
                         $address = $rows['farmer_address'];

                         echo "<div class='container'>
                              <div class='row'>
                                   <div class='col-md-4'>
                                        <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                                             <div class='carousel-inner'>
                                                  <div class='carousel-item active'>
                                                       <div class='nice'> <img src='../Admin/product_images/$product_image' height=400px class='d-block w-100'></div>
                                                  </div>

                                             </div>

                                        </div>
                                   </div>
                                   <div class='col-md-4'>
                                        <label>
                                             <p class='newarrival text-center'>FRESH</p>
                                        </label>
                                        <div class='mid'>
                                             <h2> $product_title</h2>
                                        </div><br>

                                        <p class='price'>Price<i class='fa fa-rupee fa-1x'></i> : $product_price  Rs</p>
                                        <p class='price'>Stock : $product_stock Kg</p>
                                        <br>


                                        <form action = '' method = 'post'>
                                        <div class='mid'><label ><b>Quantity</b></label>
                                             
                                             <input type='number' style = 'width:80px;' name = 'quantity' value='1'>
                                            
                                        </div>

                                        <br><button type = 'submit' name = 'save' class='one'>Save for Later<i  style = 'padding:4px;padding-bottom:7px;' class='fa fa-shopping-basket fa-2x'></i></button>

                                        <div class='ri'><button type = 'submit' name = 'cart'  style = 'padding:4px;padding-bottom:7px;' class='addtocart'>ADD TO CART <i class='fa fa-shopping-cart fa-2x' style=' background-color:#FFD700'></i></button></a><br><br>    
                                        </div><br>
                                        </form>



                                        <br><br><i class='fa fa-truck fa-1x'></i><label  style = 'padding-left:9px;' > $product_delivery</label>
                                   </div>
                                   <div class='box'><br>
                                        <h2> FARMER DETAILS </h2>
                                        <span id='linebreak'></span>
                                        <label><b> Name: </b></label><label style = 'padding-left:10px;'>$name</label><br>
                                        <label><b>  Phone Number :  </b> </label><label style = 'padding-left:10px;'>$phone</label>
                                        <br><label>
                                             <div class='midd'>
                                                  <div class='midone'><b  style = 'padding-right:10px;' >Address:</b></div><textarea style = 'background-color:transparent' disabled cols='24'>$address</textarea>
                                             </div>
                                        </label><label></label>
                                        <a href = '../ChatSystem/index.php'><button class='doing' style = 'padding-left:7px;'>Chat <i class='fa fa-comment fa-1x'></i></button></a>
                                   </div>

                                   <div class='col-md-4'> <br>
                                        <div class='bye'>
                                             <p class='some'>
                                                  <h2> Description</h2>
                                             </p><br>
                                             <p>$product_desc</p><br>
                                        </div>

                                   </div>
                              </div>

                         </div>";

                         if (isset($_POST['cart'])) {

                              if (isset($_POST['quantity'])) {
                                   $qty = $_POST['quantity'];
                              } else {
                                   $qty = 1;
                              }
                              global $con;
                              $sess_phone_number = $_SESSION['phonenumber'];

                              $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                              $run_check = mysqli_query($con, $check_pro);

                              if (mysqli_num_rows($run_check) > 0) {
                                   echo "";
                              } else {
                                   $insert_pro = "insert into cart (product_id,phonenumber,qty) values ('$product_id','$sess_phone_number','$qty')";
                                   $run_insert_pro = mysqli_query($con, $insert_pro);
                                   // echo "<script>window.location.reload(true)</script>";
                              }
                         }
                    }
               }
          }
          ?>







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