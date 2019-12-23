<html>
<head>
</head>
<title>D'nutirtion</title>
<style>
header{
  background-color: #EBFDD0;
}
.menu{
  height: 95px;
  display: inline-flex;
  margin-left: 50px;
}
#HelloUser{
  position: absolute;
  top: 20%;
  left: 47%:
  background:black;
  color: white;
}
.menu button{
  text-decoration: none;
  color: #404240;
  text-decoration-style: solid;
  margin: 20 40 0 0;
  font-family: sans-serif;
  height: 32px;
  background-repeat: no-repeat;
  border: 0;
  outline: 0;
  background: inherit;
  border-radius: 4px;
  cursor: pointer;
  font: inherit;
  transition: all .1s linear;
}
 .menu button:hover{
  color: white;
  background: #62b72d;
  border-radius: 10px;
  box-shadow: 0px 0px 2px 0px #71d235;
}
.menu button:active {
  box-shadow: 0 2px 0 #71d235;
  transform: translateY(3px);
}
.unem{
  align-items: center;
  display: flex;
  flex-wrap: nowrap;
  width: 100%;
  background: white;
}
.unem button{
  text-decoration: none;
  color: #404240;
  text-decoration-style: solid;
  margin-top: 5px;
  margin-left: 22%;
  margin-bottom: 5px;
  font-family: sans-serif;
  height: 30px;
  background-repeat: no-repeat;
  border: 0;
  outline: 0;
  background: inherit;
  border-radius: 4px;
  cursor: pointer;
  font: inherit;
  transition: all .1s linear;
}
.unem button:hover{
 color: white;
 background: #62b72d;
 border-radius: 10px;
 box-shadow: 0px 0px 2px 0px #71d235;
}
.unem button:active {
 box-shadow: 0 2px 0 #71d235;
 transform: translateY(3px);
}
#logo{
  float: left;
  width:110px;
  height: 90px;
}
#login{
  position: absolute;
  margin: 27 50 0 0;
  right: 0;
  background: inherit;
  background-repeat: no-repeat;
  border: none;
  font-size: 17.1px;
  color: #404240;
  font-family: sans-serif;
}
.photki{
  display: none;
  width: 90%;
  height: 70%;
  margin-left: 80px;
  margin-top: 50px;
  margin-bottom: 200px;
}
.photki img{
  margin-left: 5px;
  margin-right: 5px;
  margin-top: 16px;
  width: 440px;
  float: left;
}
.photki img:hover{
  box-shadow: 0px 0px 80px 0px #92b37d;
  width: 420px;
}
h1{
  font-family: sans-serif;
  color: #676967;
  font-variant: small-caps;
  margin-left: 450px;
}
svoiphotki h1{
  text-align: center;
  margin-left: -200px;
}
h5{
  text-align: center;
  font-family: sans-serif;
  color: #676967;
  font-variant: small-caps;
  margin-left: -200px;
}
h2{
  position: absolute;
  top: 2.5%;
  right: 120px;
  font-family: sans-serif;
  color: #676967;
  font-variant: small-caps;
  text-align: center;
  background: inherit;
  z-index: 2;
  -webkit-animation: cssAnimation 5s forwards;
    animation: cssAnimation 5s forwards;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.adminpage div{
  width: 400px;
  margin-left: 50px;
  margin-right: 50px;
  float: left;
}
tr:nth-child(even) {
  background-color: #EBFDD0;
}
.mainpage img{
  filter: blur(0px);
  width: 100%;
  display: block;
}
.mainpage{
  display: block;
}
footer{
  background-color: #EBFDD0;
  top:25px;
  height: 50px;
  text-align: center;
}
#reg{
  cursor: pointer;
    border-radius: 5em;
    color: #2d6f2c;
    background: #EBFDD0;
    border: 0;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 10px;
    padding-top: 10px;
    font-family: 'Ubuntu', sans-serif;
    margin-left: 30%;
    font-size: 13px;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    margin-top: 10px;
}
.loginPage{
  position: absolute;
  top: 20%;
  left: 38%;
  display: none;
}
.registrationpage{
  position: absolute;
  top: 20%;
  left: 38%;
  display: none;
}
.main1{
  position: absolute;
     background-color: #FFFFFF;
     width: 400px;
     height: 400px;
     margin: 7em auto;
     border-radius: 1.5em;
     box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
     z-index: 2;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
     border-bottom-left-radius: 5px;
     border-bottom-right-radius: 5px;
}
.main {
  position: absolute;
     background-color: #FFFFFF;
     width: 400px;
     height: 400px;
     margin: 7em auto;
     border-radius: 1.5em;
     box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
     z-index: 2;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
     border-bottom-left-radius: 5px;
     border-bottom-right-radius: 5px;
 }
 .sign {
     padding-top: 40px;
     color: #8C55AA;
     font-family: 'Ubuntu', sans-serif;
     font-weight: bold;
     font-size: 23px;
 }
 .un {
 width: 76%;
 color: rgb(38, 50, 56);
 font-weight: 700;
 font-size: 14px;
 letter-spacing: 1px;
 background: rgba(136, 126, 126, 0.04);
 padding: 10px 20px;
 border: none;
 border-radius: 20px;
 outline: none;
 box-sizing: border-box;
 border: 2px solid rgba(0, 0, 0, 0.02);
 margin-bottom: 50px;
 margin-left: 46px;
 text-align: center;
 margin-bottom: 27px;
 font-family: 'Ubuntu', sans-serif;
 }
 form.form1 {
     padding-top: 40px;
 }
 .svoiphotki{
   float:left;
   width: 100%;
   margin-top: 50px;
   display: none;
   margin-left: 150px;
 }
 .svoiphotki img{
   width: 400px;
   float: left;
   z-index:-1;
 }
 .svoiphotki img:hover{
   margin: auto;
   width: 450px;
   float: right;
   z-index: 1;
 }
 #f3{
   z-index:-1;
   margin-top: -335px;
 }
 #f5{
   z-index: -1;
   margin-top: -262px;
 }
 .adminpage a,p{
   font-family: sans-serif;
   color: #676967;
   font-variant: small-caps;
   text-align: center;
 }

 .pass {
 width: 76%;
 color: rgb(38, 50, 56);
 font-weight: 700;
 font-size: 14px;
 letter-spacing: 1px;
 background: rgba(136, 126, 126, 0.04);
 padding: 10px 20px;
 border: none;
 border-radius: 20px;
 outline: none;
 box-sizing: border-box;
 border: 2px solid rgba(0, 0, 0, 0.02);
 margin-bottom: 50px;
 margin-left: 46px;
 text-align: center;
 margin-bottom: 27px;
 font-family: 'Ubuntu', sans-serif;
 }
 .un:focus, .pass:focus {
     border: 2px solid rgba(0, 0, 0, 0.18) !important;
 }
 .submit {
   cursor: pointer;
     border-radius: 5em;
     color: #2d6f2c;
     background: #EBFDD0;
     border: 0;
     padding-left: 40px;
     padding-right: 40px;
     padding-bottom: 10px;
     padding-top: 10px;
     font-family: 'Ubuntu', sans-serif;
     margin-left: 35%;
     font-size: 13px;
     box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
 }
 .regist a{
     text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
     color: #2d5f27;
     padding-top: 15px;
 }
 a {
     text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
     color: #E1BEE7;
     text-decoration: none;
 }
 .krasiva{
   width: 90%;
   height: 70%;
   margin-left: 120px;
   margin-top: 50px;
   margin-bottom: 200px;
 }
 .krasiva img{
   margin-left: 10px;
   margin-right: 10px;
   margin-top: 16px;
   width: 400px;
   height: 600px;
   float: left;
 }
   .ProductsforMan{
     float: left;
     margin-top: 70px;
     width: 80%;
     margin-left: 100px;
     display: none;
   }
   .ProductsforWoman{
     float: left;
     margin-top: 70px;
     width: 80%;
     margin-left: 100px;
     display: none;
   }
   .card {
    float: left;
    margin-left: 50px;
    margin-right: 50px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 200px;
  height: 200px;
  text-align: center;
  font-family: arial;
}
.card img{
  width: 150px;
  height: 180px;
}
.price {
  color: grey;
  font-size: 22px;
}
.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.card button:hover {
  opacity: 0.7;
}
#footer{
  color: black;
  bottom: 0px;
  opacity: 1;
}
#footName{
  color: black;
}
.adminpage{
  float: left;
  display: none;
  margin-top:50px;
}
.adminpage h3{
  color: #275163;
  text-align: center;
}
#Admin{
  margin-left: 46px;
  background: #EBFDD0;
  border: none;
  outline: none;
  color: #581d1d;
}
.Bestclients{
  float: left;
  width: 800px;
  margin-left: 200px;
}
.adminpage h1{
  text-align: center;
  margin-left:-20px;
}
#close{
  position:absolute;
  right: 10;
  font-size: 25;
  background-color: inherit;
  color: black;
  background-repeat: no-repeat;
  border: none;
}
@media (max-width: 800px) {
  header{
    width: 100%;
  }
  .menu{
    width: 100%;
    height: 95px;
    display: inline-flex;
    margin-left: 50px;
  }
  .menu button{
    text-decoration: none;
    color: #404240;
    text-decoration-style: solid;
    margin: 10 10 0 10;
    font-family: sans-serif;
    height: 32px;
    background-repeat: no-repeat;
    border: 0;
    outline: 0;
    background: inherit;
    border-radius: 4px;
    cursor: pointer;
    font: inherit;
    transition: all .1s linear;
  }
   .menu button:hover{
    color: white;
    background: #62b72d;
    border-radius: 10px;
    box-shadow: 0px 0px 2px 0px #71d235;
  }
  .menu button:active {
    box-shadow: 0 2px 0 #71d235;
    transform: translateY(3px);
  }
  .unem{
    display: flex;
    flex-wrap: nowrap;
    width: 100%;
    background: white;
  }
  .unem button{
    text-decoration: none;
    color: #404240;
    text-decoration-style: solid;
    margin: 5 40 0 50;
    font-family: sans-serif;
    height: 30px;
    background-repeat: no-repeat;
    border: 0;
    outline: 0;
    background: inherit;
    border-radius: 4px;
    cursor: pointer;
    font: inherit;
    transition: all .1s linear;
  }
  .unem button:hover{
   color: white;
   background: #62b72d;
   border-radius: 10px;
   box-shadow: 0px 0px 2px 0px #71d235;
  }
  .unem button:active {
   box-shadow: 0 2px 0 #71d235;
   transform: translateY(3px);
  }
  #logo{
    float: left;
    width:70px;
    height: 50px;
  }
  #login{
    position: absolute;
    margin: 27 50 0 0;
    right: 0;
    background: inherit;
    background-repeat: no-repeat;
    border: none;
    font-size: 17.1px;
    color: #404240;
    font-family: sans-serif;
  }
  .photki{
    display: none;
    width: 90%;
    height: 70%;
    margin-left: 20px;
    margin-top: 50px;
    margin-bottom: 200px;
  }
  .photki img{
    margin-left: 5px;
    margin-right: 5px;
    margin-top: 16px;
    width: 220px;
    float: left;
  }
  .photki img:hover{
    box-shadow: 0px 0px 80px 0px #92b37d;
    width: 420px;
  }
  .krasiva{
    width: 90%;
    height: 70%;
    margin-left: 40px;
    margin-top: 50px;
    margin-bottom: 50px;
  }
  .krasiva img{
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 16px;
    width: 200px;
    height: 300px;
    float: left;
  }
  footer{
    bottom: 0px;
  }
  h1{
    float: left;
  }
  }
</style>
<body>
  <header id = "header">
  <div class="menu">
    <img src="logo3.png" alt="" id ="logo">
    <h1>Best nutirtion ever</h1>
    <button id = 'login' type="button" onclick="LoginMouseover()" name="button"><img src="login.png" style="opacity:0.8" width = "30px" alt=""></button>
        </div>
  <div class="unem">
  <button onclick="mainPage()">Home</button>
  <button onclick="AboutUs()">About Us</button>
  <button onclick="changePage()">Categories</button>
  </div>
</header>
<div class="loginPage" id = "loginPage">
  <div class="main" id = "main">
  <button type="button" align ="right" id ="close" name="button" onclick="LoginMouseout()">x</button>
  <p class="sign" align="center">Sign in</p>
  <form class="form1" action = 'Project.php' method = 'post'>
    <input class="un " type="text" align="center" placeholder="Username" name="username">
    <input class="pass" type="password" align="center" placeholder="Password" name="password">
    <input class="submit" align="center" type="submit" value="Sign in"></input>
    <button type="button" id = "reg" name="button" onclick="regPage()">Regerstration</button>
    <button type="button" name="button" onclick="adminpage();LoginMouseout()" id = "Admin">Admin page</button>
  </div>
</div>
<div class="registrationpage" id = "registrationpage">
  <div class="main1" id = "main1">
  <button type="button" align ="right" id ="close" name="button" onclick="LoginMouseout()">x</button>
  <p class="sign" align="center">Registration</p>
  <form class="form1" action = 'Project.php' method = 'post'>
    <p>Enter your name: </p> <input class="un " type="text" align="center" placeholder="Username" name="username1">
    <p>Enter your password: </p><input class="pass" type="password" align="center" placeholder="Password" name="password1">
    <input class="submit" align="center" type="submit" value="Sign up"></input>
    </div>
</div>
<div class="adminpage" id="adminpage">
  <h1>This is the Admin page</h1>
  <div class="Visitors">
    <p>Site has visited by</p>
    <h3> 159 000 clients</h3>
  </div>
  <div class="Purchase">
    <p>Products was buy by</p>
    <h3> 50 000 clients</h3>
  </div>
  <div class="Bestclients">
    <table>
  <tr>
    <th>Login</th>
    <th>Password</th>
    <th>Spend money</th>
  </tr>
  <tr>
    <td>Super major</td>
    <td>qwerty123</td>
    <td>40000$</td>
  </tr>
  <tr>
    <td>Kachek</td>
    <td>qwerty123</td>
    <td>30000$</td>
  </tr>
  <tr>
    <td>Narkoman</td>
    <td>qwerty123</td>
    <td>20000$</td>
  </tr>
  </table>
  </div>
</div>
  <div class = "photki" id = "photki">
    <a href="#" onclick="productsM()">
    <img src="mvds.jpg" alt="">
    </a>
    <a href="#" onclick="productsW()">
    <img src="wvds.jpg" alt="">
    </a>
    <a href="#">
    <img src="whey.jpg" alt="">
    </a>
    <a href="#">
    <img src="vitewomen.jpg" alt="">
    </a>
  </div>
      <div class="mainpage" id = "mainpage">
        <div class="aq">
        </div>
       <img src="background2.jpg" alt="" id ="Bg">
       <div class = "krasiva" id = "krasiva">
         <h1>Tasty, Healthy and Easy</h1>
         <img src="banan.jpg" alt="" data-wow-duration="2s">
         <img src="avokado.jpg" alt="" data-wow-duration="2s">
         <img src="granat.jpg" alt="" data-wow-duration="2s">
       </div>
      </div>
      <div class = "svoiphotki" id = "svoiphotki">
        <h5>This is the online store, where you can find sport nutirtion for mens and womans.</h5>
        <h5>My name is Dastan.</h5>
        <h1>This is my transformation</h1>
        <img src="4.jpeg" alt="">
        <img src="6.jpeg" alt="">
        <img src="1.jpeg" alt="">
        <img src="2.jpeg" alt="">
        <img src="3.jpeg" alt="" id = 'f3'>
        <img src="5.jpeg" alt="" id = "f5">
        <img src="7.jpeg" alt="">
        </div>
      <div class="ProductsforMan" id = "ProductsforMan">
        <div class="card">
          <img src="whey.jpeg" alt="Whey" style="width:100%">
          <h2>Whey Gold Standard</h2>
          <p class="price">$19.99</p>
          <p>Isolate protein 2.27 kg</p>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
          <img src="gainer.jpg" alt="Whey" style="width:100%">
          <h2>Whey Gold Standard</h2>
          <p class="price">$24.99</p>
          <p>Gainer for mass 2.27 kg</p>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
          <img src="cookies.png" alt="Whey" style="width:100%">
          <h2>Whey Classic Series</h2>
          <p class="price">$14.99</p>
          <p>Cookies biscuits 2kg</p>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
          <img src="amino.jpg" alt="Whey" style="width:100%">
          <h2>Whey Amino Advanced</h2>
          <p class="price">$11.99</p>
          <p>Dietary supplement 1kg</p>
          <p><button>Add to Cart</button></p>
        </div>
      </div>
      <div class="ProductsforWoman" id = "ProductsforWoman">
        <div class="card">
          <img src="wheyWoman.jpeg" alt="Whey" style="width:100%">
          <h2>Whey Gold Standard</h2>
          <p class="price">$19.99</p>
          <p>Isolate protein 2.27 kg</p>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
          <img src="womanpro.png" alt="Whey" style="width:100%">
          <h2>Whey Gold Standard</h2>
          <p class="price">$24.99</p>
          <p>Gainer for mass 2.27 kg</p>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
          <img src="isowoman.jpg" alt="Whey" style="width:100%">
          <h2>Whey Classic Series</h2>
          <p class="price">$14.99</p>
          <p>Cookies biscuits 2kg</p>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
          <img src="optiwoman.jpg" alt="Whey" style="width:100%">
          <h2>Whey Amino Advanced</h2>
          <p class="price">$11.99</p>
          <p>Dietary supplement 1kg</p>
          <p><button>Add to Cart</button></p>
        </div>
      </div>
  <footer id = "footer">
    <div class="thisisfooter">
      <div class="AboutSite">
      </div>
      <div class="Contacts">
        <a href="https://www.instagram.com/nurumoff__" id ="footName">Instagram</a>
        <a href="https://vk.com/endorfinzashkalivaet" id ="footName">Vk</a>
      </div>
    </div></footer>
<script>
var currentPage = document.getElementById('mainpage');
        function LoginMouseover() {
          document.getElementById('loginPage').style.display = 'block';
          document.getElementById('header').style.filter = "blur(2px)";
          document.getElementById('footer').style.filter = "blur(2px)";
          currentPage.style.filter = "blur(2px)";
        }
        function LoginMouseout() {
          document.getElementById('loginPage').style.display = 'none';
          document.getElementById('header').style.filter = "blur(0px)";
          document.getElementById('footer').style.filter = "blur(0px)";
          currentPage.style.filter = "blur(0px)";
        }
        function changePage(){
          currentPage.style.display = "none";
          document.getElementById('photki').style.display = "block";
          currentPage = document.getElementById('photki');
        }
        function mainPage(){
          currentPage.style.display = "none";
          document.getElementById('mainpage').style.display = "block";
          currentPage = document.getElementById('mainpage');
        }
        function productsM(){
          currentPage.style.display = "none";
          document.getElementById('ProductsforMan').style.display = "block";
          currentPage = document.getElementById('ProductsforMan');
        }
        function productsW(){
          currentPage.style.display = "none";
          document.getElementById('ProductsforWoman').style.display = "block";
          currentPage = document.getElementById('ProductsforWoman');
        }
        function AboutUs(){
          currentPage.style.display = "none";
          document.getElementById('svoiphotki').style.display = "block";
          currentPage = document.getElementById('svoiphotki');
        }
        function adminpage(){
          currentPage.style.display = "none";
          document.getElementById('adminpage').style.display = "block";
          currentPage = document.getElementById('adminpage');
          document.getElementById('footer').style.bottom = 0;
        }
        function regPage(){
          document.getElementById('loginPage').style.display = "none";
          document.getElementById('registrationpage').style.display = "block";
          currentPage = document.getElementById('registrationpage');
        }
</script>
<?php
 if(isset($_POST['username']) && isset($_POST['password'])){
  $connect = mysqli_connect('localhost', 'root', '', 'web');
  if(!$connect){
   echo "Failed to connect to the server";
  }
  if(!mysqli_select_db($connect, 'web')){
   echo "Failed to connect to Database";
  }
  $query = 'SELECT * FROM web';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $result = mysqli_query($connect, $query);
  while($row = mysqli_fetch_array($result)){
    $usr = $row['username'];
    $psw = $row['password'];
    if ($usr == $username && $password == $psw){
     echo "<h2>Hello ".$username;
    }
    else{
     echo "<h2>There's no such user</h2>";
    }
  }
 }
?>
<?php
$servername = "localhost";
$username = $_POST['username1'];
$password = $_POST['password1'];
$dbname = "web";

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'web');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `web` (`username`, `password`) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
</body>
</html>
