<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

ul{
  text-align: left;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.center {
  text-align: center;
}
img {
  image-rendering: auto;
}


#more {display: none;}

</style>
</head>
<body>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="collection.php">Collection</a>
  <a href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
  <a href="designer.php">Designer</a>
  <a class="log" href="login.php">Login</a>
  <a class="log" href="signup.php">Signup</a>
</div>

<h2>Get to see all our designs across kenya</h2>
<br>



<div class="row">
  <div class="column">
    <div class="card">
      <img src="image 45.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Zipped </h2>
        <p class="title">Dress</p>
        <p>Ladies</p>
        <p>Orange</p>
        <p>Price: From Kshs 1500</p>
        
        <p><a href ="image 45.php"><button class ="button" >Read more</button></a></p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image 40.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Suit</h2>
        <p class="title">Romper</p>
        <p>Ladies</p>
        <p>Green</p>
        <p>Price: Kshs 1200</p>
        
    
        <p><a href ="image40.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="image 396.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>African</h2>
        <p class="title">Dress</p>
        <p>Ladies</p>
        <p>Mixed red</p>
        <p>Price: Kshs 1800</p>
        
        <p><a href ="riverside.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="skirt6.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Highlow</h2>
        <p class="title">Skirt</p>
        <p>Ladies</p>
        <p>Mixed purple</p>
        <p>Price: From Kshs 2500</p>
        
        
        <p><a href ="skirt6.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image60.png" alt="" style="width:100% ">
      <div class="container">
        <h2>Top low</h2>
        <p class="title">Skirt</p>
        <p>Ladies</p>
        <p>Mixed orange</p>
        <p>Price: From Kshs 2200</p>
        
       
        <p><a href ="image60.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="image 4.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Low key</h2>
        <p class="title">Skirt</p>
        <p>Ladies</p>
        <p>Mixed blue</p>
        <p>Price: From Kshs 2800</p>
        
    
        <p><a href ="image 4.php"><button class ="button" >Read more</button></a></p>
      </div>
    </div>
  </div>
</div>

<div class="center">
  <div class="pagination">
  <a href="collection.php" class="active">1</a>
  <a href="collection1.php" >2</a>
  <a href="collection2.php">3</a>
  
  </div>
</div>


<footer >
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
    <li><a href="index.php">Home</a></li>
  <li><a href="colection.php">Collection</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="designer.php">Designer</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0702073700" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:harrietsoita9@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?harry" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/harry" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/missharya/" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>

    </div>
    <div class="w3-display-middle w3-padding">
     <p>HARRY FASHION  KENYA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      

    </div>
    
  </div>
</div>
</footer>
</body>
</html>
