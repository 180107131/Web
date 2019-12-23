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

/**
  * Delete a user
  */

require "../config.php";
require "../common.php";

if (isset($_GET["id"])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $id = $_GET["id"];

    $sql = "DELETE FROM users WHERE id = :id";

    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $success = "User successfully deleted";
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}

try {
  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM users";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "templates/header.php"; ?>

<h2>Delete users</h2>

<?php if ($success) echo $success; ?>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Address</th>
      <th>Age</th>
      <th>Location</th>
      <th>Date</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $row) : ?>
    <tr>
      <td><?php echo escape($row["id"]); ?></td>
      <td><?php echo escape($row["firstname"]); ?></td>
      <td><?php echo escape($row["lastname"]); ?></td>
      <td><?php echo escape($row["email"]); ?></td>
      <td><?php echo escape($row["age"]); ?></td>
      <td><?php echo escape($row["location"]); ?></td>
      <td><?php echo escape($row["date"]); ?> </td>
      <td><a href="delete.php?id=<?php echo escape($row["id"]); ?>">Delete</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
</body>
</html>
