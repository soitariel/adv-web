<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing:border-box;
}



.container {
  padding: 64px;
}
.container:hover{
  background-color: red;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}
ul{
  text-align: left;
}


img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
</style>
</head>
<body backgroundg color="black">
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="collection.php">Collection</a>
  <a href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
  <a href="designers.php">Designers</a>
  <a class="log" href="login.php">Login</a>
  <a class="log" href="signup.php">Signup</a>
</div>

<div style="text-align:center">
  <h2 style="color: white"><i>GET THE LATEST NEWS IN FASHIONS</i></h2>

</div>

<!-- The App Section -->
<div class="container" style="background-color: white;">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>AFFORDABLE DESIGNS IN NAIROBI</b></h1>
      
      <p>Are you thinking of dressing smartly? We have compiled a list of best designs of various attires.</p>
      <a href="ankara.php"><button class="button" style="background-color:black">Learn More</button></a>
    </div>
    <div class="column-33">
        <img src="log.jpg" width="3600" height="">
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:white">
  <div class="row">
    <div class="column-33">
    <img src="image 29.jpeg" width="867" height="1300" >
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>What to Expect when you invest in Fashion</b></h1>
      
      <p>Be creative and come up with new designs.</p>
      <a href="astoria.php"><button class="button" style="background-color:black">Learn More</button></a>
      
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container" style="background-color:white">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>5 Fashion Tips That Will Make Your Search Easier</b></h1>
    
      <p>One should dress simply withou mixing so many colors in the sense that bright colors should be worn alone while dull colors should be worn with other accessories..</p>
      <a href="astoria.php"><button class="button" style="background-color:black">Learn More</button></a>
    </div>
    <div class="column-33">
        <img src="slide40.jpg" width="563" height="696">
    </div>
  </div>
</div>
<footer >
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
    <li><a href="index.php">Home</a></li>
  <li><a href="collection.php">Collection</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="designers.php">Designers</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0792052668" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:harrietsoita9@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/missharya/" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>

    </div>
    <div class="w3-display-middle w3-padding">
     <p>HARRY FASHIONS KENYA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      

    </div>
    
  </div>
</div>
</footer>

</body>
</html>
